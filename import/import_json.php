<?php
/**
 * Created by PhpStorm.
 * User: dan
 * Date: 22/07/16
 * Time: 10:39
 */


// open the file
//$file = "Infoseek.json";
$file = "test.json";
$file = "Infoseek JSON Output.txt";
include('import_connection.php');



$handle = fopen($file, "r");
if ($handle) {
    while (($line = fgets($handle)) !== false) {
        // process the line read.
        echo $line;


$decode = json_decode($line, true);

print_r($decode);


        if (!empty($decode['_id'])) {

            $index = $decode['_index'];
            $type = $decode['_type'];
            $id = $decode['_id'];
            $version = $decode['_version'];
            $found = $decode['found'];

            echo $index, $type, $id, $version, $found;

            $query = "INSERT INTO games (indexDesc,typeDesc, infoseekid,version,foundDesc, url,domainDesc,path,subdomain,parenturl,anchor)
 values ('" . $decode['_index'] . "','" . $decode['_type'] . "','" . $decode['_id'] . "','" . $decode['_version'] . "','" . $decode['found'] . "','" .
                $decode['_source']['pageinfo']['url'] . "','" . $decode['_source']['pageinfo']['domain'] . "','" . $decode['_source']['pageinfo']['path'] . "','" .
                $decode['_source']['pageinfo']['subDomain'] . "','" . $decode['_source']['pageinfo']['parentUrl'] . "','" . $decode['_source']['pageinfo']['anchor'] . "'

 )
";

            echo $query;


            $stmt = $dbh->prepare("INSERT INTO games
(indexDesc,type, infoseekid,version,found, url,domain,path,subdomain,parenturl,anchor,
fulltitle, yearofrelease, tieinlicence, machinetype, numberofplayers,
messagelanguage, originalpublication, availability, protectionscheme, series, othersystems
)
VALUES
(:indexDesc,:type,:infoseekId,:version,:found,:url,:domain,:path,:subDomain,:parentUrl, :anchor,
:fulltitle, :yearofrelease, :tieinlicence, :machinetype, :numberofplayers,
:messagelanguage, :originalpublication, :availability, :protectionscheme, :series, :othersystems
)");


            $stmt->bindValue(':indexDesc', $decode['_index'], PDO::PARAM_STR);
            $stmt->bindValue(':type', $decode['_type'], PDO::PARAM_STR);
            $stmt->bindValue(':infoseekId', $decode['_id'], PDO::PARAM_STR);
            $stmt->bindValue(':version', $decode['_version'], PDO::PARAM_STR);
            $stmt->bindValue(':found', $decode['found'], PDO::PARAM_STR);
            $stmt->bindValue(':url', $decode['_source']['pageinfo']['url'], PDO::PARAM_STR);
            $stmt->bindValue(':domain', $decode['_source']['pageinfo']['domain'], PDO::PARAM_STR);
            $stmt->bindValue(':path', $decode['_source']['pageinfo']['path'], PDO::PARAM_STR);
            $stmt->bindValue(':subDomain', $decode['_source']['pageinfo']['subDomain'], PDO::PARAM_STR);
            $stmt->bindValue(':parentUrl', $decode['_source']['pageinfo']['parentUrl'], PDO::PARAM_STR);
            $stmt->bindValue(':anchor', $decode['_source']['pageinfo']['anchor'], PDO::PARAM_STR);


            $stmt->bindValue(':fulltitle', $decode['_source']['fulltitle'], PDO::PARAM_STR);
            $stmt->bindValue(':yearofrelease', $decode['_source']['yearofrelease'], PDO::PARAM_STR);
            $stmt->bindValue(':tieinlicence', $decode['_source']['tieinlicence'], PDO::PARAM_STR);
            $stmt->bindValue(':machinetype', $decode['_source']['machinetype'], PDO::PARAM_STR);
            $stmt->bindValue(':numberofplayers', $decode['_source']['numberofplayers'], PDO::PARAM_STR);


            $stmt->bindValue(':messagelanguage', $decode['_source']['messagelanguage'], PDO::PARAM_STR);
            $stmt->bindValue(':originalpublication', $decode['_source']['originalpublication'], PDO::PARAM_STR);
            $stmt->bindValue(':availability', $decode['_source']['availability'], PDO::PARAM_STR);
            $stmt->bindValue(':protectionscheme', $decode['_source']['protectionscheme'], PDO::PARAM_STR);
            $stmt->bindValue(':series', $decode['_source']['series'], PDO::PARAM_STR);
            $stmt->bindValue(':othersystems', $decode['_source']['othersystems'], PDO::PARAM_STR);

            $stmt->execute();

            echo "\nPDOStatement::errorInfo():\n";
            $arr = $stmt->errorInfo();
            print_r($arr);

            $lastId = $dbh->lastInsertId();


            echo '<h3>Add the magazines 0</h3>';

            if (!(empty($decode['_source']['magazine_0']))) {

                $stmt = $dbh->prepare("INSERT INTO magazines
(game_id, issue, magazine_type, magazine, page, url, type
)
VALUES
(:game_id, :issue, :magazine_type, :magazine, :page, :url, :type
)");


                foreach ($decode['_source']['magazine_0'] as $mag) {


                    print_R($mag);

                    if (isset($mag['url'])) {
                        $url = $mag['url'];
                    } else {
                        $url = '';
                    }


                    if (isset($mag['page'])) {
                        $page = $mag['page'];
                    } else {
                        $page = '';
                    }

                    if (isset($mag['magazine'])) {
                        $magazine = $mag['magazine'];
                    } else {
                        $magazine = '';
                    }

                    if (isset($mag['magazine_type'])) {
                        $magazine_type = $mag['magazine_type'];
                    } else {
                        $magazine_type = '';
                    }

                    if (isset($mag['issue'])) {
                        $issue = $mag['issue'];
                    } else {
                        $issue = '';
                    }

                    $stmt->bindValue(':game_id', $lastId, PDO::PARAM_STR);
                    $stmt->bindValue(':issue', $issue, PDO::PARAM_STR);
                    $stmt->bindValue(':magazine_type', $magazine_type, PDO::PARAM_STR);
                    $stmt->bindValue(':magazine', $magazine, PDO::PARAM_STR);
                    $stmt->bindValue(':page', $page, PDO::PARAM_STR);
                    $stmt->bindValue(':url', $url, PDO::PARAM_STR);
                    $stmt->bindValue(':type', '0', PDO::PARAM_STR);

                    $stmt->execute();

                    echo "\nPDOStatement::errorInfo():\n";
                    $arr = $stmt->errorInfo();
                    print_r($arr);

                }


            }

            echo '<h3>Add the magazines 1</h3>';

            if (!(empty($decode['_source']['magazine_1']))) {

                $stmt = $dbh->prepare("INSERT INTO magazines
(game_id, issue, magazine_type, magazine, page, url, type
)
VALUES
(:game_id, :issue, :magazine_type, :magazine, :page, :url, :type
)");


                foreach ($decode['_source']['magazine_1'] as $mag) {


                    print_R($mag);

                    if (isset($mag['url'])) {
                        $url = $mag['url'];
                    } else {
                        $url = '';
                    }


                    if (isset($mag['page'])) {
                        $page = $mag['page'];
                    } else {
                        $page = '';
                    }

                    if (isset($mag['magazine'])) {
                        $magazine = $mag['magazine'];
                    } else {
                        $magazine = '';
                    }

                    if (isset($mag['magazine_type'])) {
                        $magazine_type = $mag['magazine_type'];
                    } else {
                        $magazine_type = '';
                    }

                    if (isset($mag['issue'])) {
                        $issue = $mag['issue'];
                    } else {
                        $issue = '';
                    }

                    $stmt->bindValue(':game_id', $lastId, PDO::PARAM_STR);
                    $stmt->bindValue(':issue', $issue, PDO::PARAM_STR);
                    $stmt->bindValue(':magazine_type', $magazine_type, PDO::PARAM_STR);
                    $stmt->bindValue(':magazine', $magazine, PDO::PARAM_STR);
                    $stmt->bindValue(':page', $page, PDO::PARAM_STR);
                    $stmt->bindValue(':url', $url, PDO::PARAM_STR);
                    $stmt->bindValue(':type', '1', PDO::PARAM_STR);

                    $stmt->execute();

                    echo "\nPDOStatement::errorInfo():\n";
                    $arr = $stmt->errorInfo();
                    print_r($arr);

                }

            }


            echo '<h3>Add the additionals</h3>';

            if (!(empty($decode['_source']['additionals']))) {

                $stmt = $dbh->prepare("INSERT INTO additionals
( game_id, filename, size, type, url
)
VALUES
(:game_id, :filename, :size, :type, :url
)");


                foreach ($decode['_source']['additionals'] as $additional) {

                    print_R($additional);

                    // check for blank entry
                    if (isset($additional['filename'])) {

                        if (isset($additional['filename'])) {
                            $filename = $additional['filename'];
                        } else {
                            $filename = '';
                        }


                        if (isset($additional['size'])) {
                            $size = trim($additional['size']);
                        } else {
                            $size = '';
                        }

                        if (isset($additional['type'])) {
                            $type = $additional['type'];
                        } else {
                            $type = '';
                        }

                        if (isset($additional['url'])) {
                            $url = $additional['url'];
                        } else {
                            $url = '';
                        }


                        $stmt->bindValue(':game_id', $lastId, PDO::PARAM_STR);
                        $stmt->bindValue(':filename', $filename, PDO::PARAM_STR);
                        $stmt->bindValue(':size', $size, PDO::PARAM_STR);
                        $stmt->bindValue(':type', $type, PDO::PARAM_STR);
                        $stmt->bindValue(':url', $url, PDO::PARAM_STR);

                        $stmt->execute();

                        echo "\nPDOStatement::errorInfo():\n";
                        $arr = $stmt->errorInfo();
                        print_r($arr);


                    }
                }

            }


            echo '<h3>Add the downloads</h3>';

            if (!(empty($decode['_source']['downloads']))) {

                $stmt = $dbh->prepare("INSERT INTO downloads
(game_id, filename, code, size, year, origin, dl, type, barcode, url
)
VALUES
(:game_id, :filename,:code, :size, :year, :origin, :dl, :type, :barcode, :url
)");


                foreach ($decode['_source']['downloads'] as $download) {

                    print_R($download);

                    // check for blank entry
                    if (isset($download['filename'])) {

                        if (isset($download['filename'])) {
                            $filename = $download['filename'];
                        } else {
                            $filename = '';
                        }


                        if (isset($download['code'])) {
                            $code = $download['code'];
                        } else {
                            $code = '';
                        }


                        if (isset($download['size'])) {
                            $size = $download['size'];
                        } else {
                            $size = '';
                        }


                        if (isset($download['year'])) {
                            $year = $download['year'];
                        } else {
                            $year = '';
                        }


                        if (isset($download['origin'])) {
                            $origin = $download['origin'];
                        } else {
                            $origin = '';
                        }


                        if (isset($download['dl'])) {
                            $dl = $download['dl'];
                        } else {
                            $dl = '';
                        }

                        if (isset($download['type'])) {
                            $type = $download['type'];
                        } else {
                            $type = '';
                        }

                        if (isset($download['barcode'])) {
                            $barcode = $download['barcode'];
                        } else {
                            $barcode = '';
                        }


                        if (isset($download['url'])) {
                            $url = $download['url'];
                        } else {
                            $url = '';
                        }

                        $stmt->bindValue(':game_id', $lastId, PDO::PARAM_STR);
                        $stmt->bindValue(':filename', $filename, PDO::PARAM_STR);
                        $stmt->bindValue(':code', $code, PDO::PARAM_STR);
                        $stmt->bindValue(':size', $size, PDO::PARAM_STR);
                        $stmt->bindValue(':year', $year, PDO::PARAM_STR);
                        $stmt->bindValue(':origin', $origin, PDO::PARAM_STR);
                        $stmt->bindValue(':dl', $dl, PDO::PARAM_STR);
                        $stmt->bindValue(':type', $type, PDO::PARAM_STR);
                        $stmt->bindValue(':barcode', $barcode, PDO::PARAM_STR);
                        $stmt->bindValue(':url', $url, PDO::PARAM_STR);

                        $stmt->execute();

                        echo "\nPDOStatement::errorInfo():\n";
                        $arr = $stmt->errorInfo();
                        print_r($arr);


                    }
                }

            }


            echo '<h3>Add the score</h3>';

            if (!(empty($decode['_source']['score']))) {

                $stmt = $dbh->prepare("INSERT INTO scores
(game_id, score, votes
)
VALUES
(:game_id, :score,:votes
)");

                echo 'score: ', $decode['_source']['score']['score'];
                echo ' votes: ', $decode['_source']['score']['votes'];

                $stmt->bindValue(':game_id', $lastId, PDO::PARAM_INT);
                $stmt->bindValue(':score', $decode['_source']['score']['score'], PDO::PARAM_INT);
                $stmt->bindValue(':votes', $decode['_source']['score']['votes'], PDO::PARAM_INT);

                $stmt->execute();

                echo "\nPDOStatement::errorInfo():\n";
                $arr = $stmt->errorInfo();
                print_r($arr);

            }


            echo '<h3>Add the other addtionals</h3>';

            if (!(empty($decode['_source']['additional']))) {

                $stmt = $dbh->prepare("INSERT INTO otheradditionals
(game_id, type, info, target
)
VALUES
(:game_id, :type,:info, :target
)");

                foreach ($decode['_source']['additional'] as $otherAdditional) {

                    print_R($download);

                    // check for blank entry
                    if (isset($otherAdditional['info'])) {

                        if (isset($otherAdditional['info'])) {
                            $info = $otherAdditional['info'];
                        } else {
                            $info = '';
                        }

                        if (isset($otherAdditional['type'])) {
                            $type = $otherAdditional['type'];
                        } else {
                            $type = '';
                        }

                        if (isset($otherAdditional['target'])) {
                            $target = $otherAdditional['target'];
                        } else {
                            $target = '';
                        }

                        $stmt->bindValue(':game_id', $lastId, PDO::PARAM_INT);
                        $stmt->bindValue(':type', $type, PDO::PARAM_STR);
                        $stmt->bindValue(':info', $info, PDO::PARAM_STR);
                        $stmt->bindValue(':target', $target, PDO::PARAM_STR);

                        $stmt->execute();

                        echo "\nPDOStatement::errorInfo():\n";
                        $arr = $stmt->errorInfo();
                        print_r($arr);

                    }

                }

            }


            echo '<h3>Add the other budgets</h3>';


            if (!(empty($decode['_source']['budgetprice']))) {

                $stmt = $dbh->prepare("INSERT INTO budgetprices
(game_id, amount, currency
)
VALUES
(:game_id, :amount,:currency
)");

                foreach ($decode['_source']['budgetprice'] as $budgetprice) {

                    print_R($budgetprice);

                    // check for blank entry

                    if (isset($budgetprice['amount'])) {

                        if (isset($budgetprice['amount'])) {
                            $amount = $budgetprice['amount'];
                        } else {
                            $amount = '';
                        }


                        if (isset($budgetprice['currency'])) {
                            $currency = $budgetprice['currency'];
                        } else {
                            $currency = '';
                        }


                        $stmt->bindValue(':game_id', $lastId, PDO::PARAM_INT);
                        $stmt->bindValue(':amount', $amount, PDO::PARAM_INT);
                        $stmt->bindValue(':currency', $currency, PDO::PARAM_STR);


                        $stmt->execute();

                        echo "\nPDOStatement::errorInfo():\n";
                        $arr = $stmt->errorInfo();
                        print_r($arr);

                    }

                }

            }


            echo '<h3>Add the other originalprice</h3>';


            if (!(empty($decode['_source']['originalprice']))) {

                $stmt = $dbh->prepare("INSERT INTO originalprices
(game_id, amount, currency
)
VALUES
(:game_id, :amount,:currency
)");

                foreach ($decode['_source']['originalprice'] as $originalprice) {

                    print_R($originalprice);

                    // check for blank entry

                    if (isset($originalprice['amount'])) {

                        if (isset($originalprice['amount'])) {
                            $amount = $originalprice['amount'];
                        } else {
                            $amount = '';
                        }


                        if (isset($originalprice['currency'])) {
                            $currency = $originalprice['currency'];
                        } else {
                            $currency = '';
                        }

                        $stmt->bindValue(':game_id', $lastId, PDO::PARAM_INT);
                        $stmt->bindValue(':amount', $amount, PDO::PARAM_INT);
                        $stmt->bindValue(':currency', $currency, PDO::PARAM_STR);

                        $stmt->execute();

                        echo "\nPDOStatement::errorInfo():\n";
                        $arr = $stmt->errorInfo();
                        print_r($arr);

                    }

                }
            }


            echo '<h3>Add the other authors</h3>';


            if (!(empty($decode['_source']['authors']))) {

                $stmt = $dbh->prepare("INSERT INTO authors
(game_id, author
)
VALUES
(:game_id, :author
)");


                $stmtGroup = $dbh->prepare("INSERT INTO groups
(game_id, author
)
VALUES
(:game_id, :group
)");

                if (isset($decode['_source']['authors'])) {

                    foreach ($decode['_source']['authors'] as $authors) {

                        print_R($authors);

                        // check for blank entry

                        print_R($authors);
                        echo 'test';
                        foreach ($authors as $author) {
                            echo 'test2';
                            echo 'author: ', $author;

                            $stmt->bindValue(':game_id', $lastId, PDO::PARAM_INT);
                            $stmt->bindValue(':author', $author, PDO::PARAM_STR);


                            $stmt->execute();

                            echo "\nPDOStatement::errorInfo():\n";
                            $arr = $stmt->errorInfo();
                            print_r($arr);
                        }
                    }

                }


                if (isset($decode['_source']['group'])) {

                    foreach ($decode['_source']['group'] as $groups) {

                        print_R($groups);

                        // check for blank entry

                        print_R($groups);
                        echo 'test';
                        foreach ($groups as $group) {
                            echo 'test2';
                            echo 'author: ', $group;

                            $stmtGroup->bindValue(':game_id', $lastId, PDO::PARAM_INT);
                            $stmtGroup->bindValue(':author', $group, PDO::PARAM_STR);


                            $stmtGroup->execute();

                            echo "\nPDOStatement::errorInfo():\n";
                            $arr = $stmtGroup->errorInfo();
                            print_r($arr);
                        }
                    }

                }
            }


            echo '<h3>Add the other controls</h3>';


            if (!(empty($decode['_source']['controls']))) {

                $stmt = $dbh->prepare("INSERT INTO controls
(game_id, control
)
VALUES
(:game_id, :control
)");

                print_R($decode['_source']['controls']);
                echo '<br>';
                echo '<br>';
                echo '<br>';

                foreach ($decode['_source']['controls'] as $control) {

                    print_R($control);

                    // check for blank entry

                    $stmt->bindValue(':game_id', $lastId, PDO::PARAM_INT);
                    $stmt->bindValue(':control', $control, PDO::PARAM_STR);

                    $stmt->execute();

                    echo "\nPDOStatement::errorInfo():\n";
                    $arr = $stmt->errorInfo();
                    print_r($arr);


                }


            }


            echo '<h3>Add the other rereleased by</h3>';


            if (!(empty($decode['_source']['rereleasedby']))) {

                $stmt = $dbh->prepare("INSERT INTO rereleasedbys
(game_id, country, rereleaased_as, name
)
VALUES
(:game_id,:country, :rereleaased_as,:name
)");

                foreach ($decode['_source']['rereleasedby'] as $rereleasedby) {

                    print_R($rereleasedby);

                    // check for blank entry

                    if (isset($rereleasedby['name'])) {

                        if (isset($rereleasedby['name'])) {
                            $name = $rereleasedby['name'];
                        } else {
                            $name = '';
                        }


                        if (isset($rereleasedby['country'])) {
                            $country = $rereleasedby['country'];
                        } else {
                            $country = '';
                        }


                        if (isset($rereleasedby['as'])) {
                            $as = $rereleasedby['as'];
                        } else {
                            $as = '';
                        }


                        $stmt->bindValue(':game_id', $lastId, PDO::PARAM_INT);
                        $stmt->bindValue(':country', $country, PDO::PARAM_STR);
                        $stmt->bindValue(':name', $name, PDO::PARAM_STR);
                        $stmt->bindValue(':rereleaased_as', $as, PDO::PARAM_STR);


                        $stmt->execute();

                        echo "\nPDOStatement::errorInfo():\n";
                        $arr = $stmt->errorInfo();
                        print_r($arr);

                    }

                }

            }


            echo '<h3>Add the publishers</h3>';


            if (!(empty($decode['_source']['publisher']))) {

                $stmt = $dbh->prepare("INSERT INTO publishers
(game_id, name, country
)
VALUES
(:game_id, :name,:country
)");

                print_R($publisher);

                $stmt->bindValue(':game_id', $lastId, PDO::PARAM_INT);
                $stmt->bindValue(':country', $decode['_source']['publisher']['country'], PDO::PARAM_STR);
                $stmt->bindValue(':name', $decode['_source']['publisher']['name'], PDO::PARAM_STR);

                $stmt->execute();

                echo "\nPDOStatement::errorInfo():\n";
                $arr = $stmt->errorInfo();
                print_r($arr);

            }

        }

    }

    fclose($handle);
} else {
    // error opening the file.
}

