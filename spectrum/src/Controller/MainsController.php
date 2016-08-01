<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Core\Configure;
/**
 * Games Controller
 *
 * @property \App\Model\Table\GamesTable $Games
 */
class MainsController extends AppController
{


    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->loadModel('Games');
        $games = $this->paginate($this->Games);


        // get random games with title screens
        $randoms = $this->Games->find('all')
            ->leftJoinWith('Additionals')
            ->where(['Additionals.type' => 'Loading screen'])
            ->select(['id','fulltitle','Additionals.type', 'Additionals.url'])
            ->order('rand()')
            ->limit(3);
//        debug($randoms);


        $this->set(compact('randoms'));
        $this->set(compact('games'));
        $this->set('_serialize', ['games']);
    }

    /**
     * View method
     *
     * @param string|null $id Game id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $this->loadModel('Games');


         $game = $this->Games->get($id, [
            'contain' => ['Additionals', 'Authors', 'Budgetprices', 'Controls', 'Downloads', 'Groups', 'Magazines', 'Originalprices', 'Otheradditionals', 'Publishers', 'Rereleasedbys', 'Scores']
        ]);

        $this->set('game', $game);

        $this->set('_serialize', ['game']);
    }


}
