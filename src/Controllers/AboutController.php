<?php

declare(strict_types=1);

namespace App\Controllers;

use Framework\TemplateEngine;
use App\Config\Paths;

class AboutController
{
    public function __construct(private TemplateEngine $views)
    {
    }

    public function about()
    {
        echo $this->views->render('about.php', [
            'title' => 'About',
            'dangerousData' => '<script>alert(123)</script>'
        ]);
    }
}
