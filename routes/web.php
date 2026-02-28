<?php

use Illuminate\Support\Facades\Route;

Route::get('/language/{locale}', function ($locale) {
    if (in_array($locale, ['en', 'vi'])) {
        session()->put('locale', $locale);
    }
    return redirect()->back();
})->name('language.switch');

Route::get('/', function () {
    return view('pages.home');
})->name('home');

Route::get('/research', function () {
    return view('pages.research');
})->name('research');

Route::get('/projects', function () {
    $projects = [
        [
            'title' => 'Genomic Data Analysis Pipeline',
            'status' => 'Ongoing',
            'description' => 'A comprehensive pipeline for processing and analyzing high-throughput genomic data.',
            'image_url' => 'https://images.unsplash.com/photo-1530497610245-94d3c16cda28?auto=format&fit=crop&q=80&w=400&h=250',
        ],
        [
            'title' => 'Protein Folding Prediction Model',
            'status' => 'Completed',
            'description' => 'Machine learning model predicting 3D structures of proteins from amino acid sequences.',
            'image_url' => 'https://images.unsplash.com/photo-1532094349884-543bc11b234d?auto=format&fit=crop&q=80&w=400&h=250',
        ],
        [
            'title' => 'Microbiome Diversity Study',
            'status' => 'Planning',
            'description' => 'Studying the diversity of microbiome in various agricultural soils.',
            'image_url' => 'https://uploads-ssl.webflow.com/61a0875915332c1fd8109f03/638ddba44d5b625b048e871c_measure-microbiome-diversity.jpg',
        ]
    ];
    return view('pages.projects', compact('projects'));
})->name('projects');

Route::get('/news', function () {
    $news = [
        [
            'title' => 'Lab Publishes New Findings on Bioinformatics',
            'date' => '2026-01-15',
            'excerpt' => 'Our recent paper on predictive modeling has been published in the leading computational biology journal.',
        ],
        [
            'title' => 'Annual Research Grant Awarded',
            'date' => '2025-11-20',
            'excerpt' => 'The lab has been awarded a major grant to continue research on computational genomics.',
        ],
        [
            'title' => 'Welcome to our New PhD Students',
            'date' => '2025-09-01',
            'excerpt' => 'We are excited to welcome three new PhD candidates joining our lab this semester.',
        ]
    ];
    return view('pages.news', compact('news'));
})->name('news');

Route::get('/technicals', function () {
    return view('pages.technicals');
})->name('technicals');

Route::get('/members', function () {
    $members = [
        [
            'name' => 'Dr. Jane Smith',
            'role' => 'Principal Investigator',
            'avatar_url' => 'https://ui-avatars.com/api/?name=Jane+Smith&background=random&size=200',
            'bio' => 'Dr. Smith leads the lab, specializing in bioinformatics and computational genomics for disease research.',
        ],
        [
            'name' => 'John Doe',
            'role' => 'Postdoctoral Researcher',
            'avatar_url' => 'https://ui-avatars.com/api/?name=John+Doe&background=random&size=200',
            'bio' => 'John focuses on structural biology and applying machine learning to protein structure prediction.',
        ],
        [
            'name' => 'Alice Johnson',
            'role' => 'PhD Student',
            'avatar_url' => 'https://ui-avatars.com/api/?name=Alice+Johnson&background=random&size=200',
            'bio' => 'Alice is working on microbiome data analysis using advanced statistical models.',
        ],
        [
            'name' => 'Bob Williams',
            'role' => 'Data Scientist',
            'avatar_url' => 'https://ui-avatars.com/api/?name=Bob+Williams&background=random&size=200',
            'bio' => 'Bob joined the lab to build robust, scalable pipelines for processing genomic sequencing data.',
        ],
    ];
    return view('pages.members', compact('members'));
})->name('members');

Route::get('/search', function (\Illuminate\Http\Request $request) {
    $query = strtolower($request->query('q', ''));
    $results = [];

    if ($query) {
        $projects = [
            ['type' => 'Project', 'url' => url('/projects'), 'title' => 'Genomic Data Analysis Pipeline', 'desc' => 'A comprehensive pipeline for processing and analyzing high-throughput genomic data.'],
            ['type' => 'Project', 'url' => url('/projects'), 'title' => 'Protein Folding Prediction Model', 'desc' => 'Machine learning model predicting 3D structures of proteins from amino acid sequences.'],
            ['type' => 'Project', 'url' => url('/projects'), 'title' => 'Microbiome Diversity Study', 'desc' => 'Studying the diversity of microbiome in various agricultural soils.'],
        ];

        $news = [
            ['type' => 'News', 'url' => url('/news'), 'title' => 'Lab Publishes New Findings on Bioinformatics', 'desc' => 'Our recent paper on predictive modeling has been published in the leading computational biology journal.'],
            ['type' => 'News', 'url' => url('/news'), 'title' => 'Annual Research Grant Awarded', 'desc' => 'The lab has been awarded a major grant to continue research on computational genomics.'],
            ['type' => 'News', 'url' => url('/news'), 'title' => 'Welcome to our New PhD Students', 'desc' => 'We are excited to welcome three new PhD candidates joining our lab this semester.'],
        ];

        $allData = array_merge($projects, $news);

        foreach ($allData as $item) {
            if (str_contains(strtolower($item['title']), $query) || str_contains(strtolower($item['desc']), $query)) {
                $results[] = $item;
            }
        }
    }

    return view('pages.search-results', [
    'results' => $results,
    'query' => $request->query('q', '')
    ]);
})->name('search');
