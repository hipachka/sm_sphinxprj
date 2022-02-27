<?php

namespace App\Controller;

use Javer\SphinxBundle\Sphinx\Manager as SphinxManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SearchController extends AbstractController
{

    const MAIN_INDEX = 'sm_index';
    const MIN_LENGTH = 2;
    const ITEMS_LIMIT = 10;

    protected SphinxManager $sphinx;

    public function __construct(SphinxManager $sphinx){
        $this->sphinx = $sphinx;
    }

    /**
     * @Route("/search", name="search")
     */
    public function index(Request $request): Response
    {

        $query = $request->query->get('query');
        $result = [];

        if(strlen($query) >= self::MIN_LENGTH) {
            $items = $this->sphinx->createQuery();
            $items
                ->select('id', 'name', 'content')
                ->from(self::MAIN_INDEX)
                ->match(['name', 'content'], $query)
                ->limit(self::ITEMS_LIMIT)->getResults();
            $result = $items->getResults();
        }

        return $this->render('search.html.twig', [
            'search_items' => $result,
            'query' => $query
        ]);

    }
}
