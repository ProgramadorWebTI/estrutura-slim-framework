<?php

namespace App;

class Pagination
{
    public function __cosntruct()
    {
        //
    }

    public function render(array $items, int $qntPorPage = 10)
    {
        $paginator = new \AshleyDawson\SimplePagination\Paginator();
        // Set some parameters (optional)
        $paginator
            ->setItemsPerPage($qntPorPage) // Give us a maximum of 10 items per page
            ->setPagesInRange(5) // How many pages to display in navigation (e.g. if we have a lot of pages to get through)
        ;

// Pass our item total callback
        $paginator->setItemTotalCallback(function () use ($items) {
            return count($items);
        });

// Pass our slice callback
        $paginator->setSliceCallback(function ($offset, $length) use ($items) {
            return array_slice($items, $offset, $length);
        });

// Paginate the item collection, passing the current page number (e.g. from the current request)
        $numberPage = 1;
        if (isset($_GET['page']) && !empty($_GET['page'])) {
            $numberPage = $_GET['page'];
        }
        $pagination = $paginator->paginate((int) $numberPage);

        return $pagination;
    }

}
