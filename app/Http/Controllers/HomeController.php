<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
// HOME METHOD
    public function index()
    {
        return view('home',["title"=>"STILLFORCE TECHNOLOGIES"]);
    }

// ABOUT METHOD
    public function about()
    {
        return View('frontend/a-propos',["title"=>"A Propos",
                                         "image_title"=>"About-Us-uai-2880x1507.jpeg",
                                         "selecteur1"=>"current-menu-parent",
                                         "sous_menu_select1"=>"current-menu-item page_item page-item-649 current_page_item"
                                         ]);
    }


// CAREER METHOD
    public function career()
    {
        return view('frontend/carriere',["title"=>"Carrière",
                                         "image_title"=>"integrio_about_us_layers_3.jpg",
                                         "selecteur4"=>"current-menu-parent"
                                         ]);

    }

// SERVICES METHOD
    public function services()
    {
        return view('frontend/services',["title"=>"Services",
                                         "image_title"=>"services_page_title_bg.jpg",
                                         "selecteur1"=>"current-menu-parent",
                                         "sous_menu_select5"=>"current-menu-item page_item page-item-649 current_page_item"
                                         ]);

    }

// MISSION METHOD
    public function mission()
    {
        return view('frontend/mission',["title"=>"Mission",
                                         "image_title"=>"mission_page_title_bg.jpg",
                                         "selecteur1"=>"current-menu-parent",
                                         "sous_menu_select2"=>"current-menu-item page_item page-item-649 current_page_item"
                                         ]);

    }

// REPRESENTATION METHOD
    public function representations()
    {
        return view('frontend/representations',["title"=>"Réprésentations",
                                         "image_title"=>"office.jpg",
                                         "selecteur1"=>"current-menu-parent",
                                         "sous_menu_select3"=>"current-menu-item page_item page-item-649 current_page_item"
                                         ]);

    }

// Partenaires METHOD
    public function partenaires()
    {
        return view('frontend/representations',["title"=>"Partenaires",
                                         "image_title"=>"team_page_title_bg.jpg",
                                         "selecteur1"=>"current-menu-parent",
                                         "sous_menu_select4"=>"current-menu-item page_item page-item-649 current_page_item"
                                         ]);

    }

// REFERENCE METHOD
    public function recommandation()
    {
        return view('frontend/recommandation',["title"=>"Recommandation",
                                         "image_title"=>"ss-rating.jpg",
                                         "selecteur3"=>"current-menu-parent"
                                         ]);

    }

// FAQ METHOD
    public function faq()
    {
        return view('frontend/faq',["title"=>"FAQ's",
                                         "image_title"=>"faq.jpg",
                                         "selecteur1"=>"current-menu-parent",
                                         "sous_menu_select6"=>"current-menu-item page_item page-item-649 current_page_item"
                                         ]);

    }

// GROUPE METHOD
    public function group()
    {
        return view('frontend/groupe',["title"=>"Groupe",
                                         "image_title"=>"team_page_title_bg.jpg",
                                         "selecteur1"=>"current-menu-parent"

                                         ]);

    }

// SHOP METHOD
    public function pricing()
    {
        return view('frontend/pricing',["title"=>"Tarification",
                                         "image_title"=>"pricing.png",
                                         "selecteur4"=>"current-menu-parent"
                                         ]);

    }

// BLOG METHOD
    public function blog()
    {
        return view('frontend/blog',["title"=>"Blog",
                                         "image_title"=>"blog-bg.jpg",
                                         "selecteur5"=>"current-menu-parent"
                                         ]);

    }

    // Blog posts
    public function blog_post1()
    {
        return view('frontend/blog/1',["subtitle"=>"Blog","title"=>"Amazon lance un chariot intelligent qui scanne vos courses",
                                         "image_title"=>"blog-bg.jpg"
                                         ]);
    }
    
    public function blog_post2()
    {
        return view('frontend/blog/2',["subtitle"=>"Blog","title"=>"Plateforme de réalité augmentée par Google",
                                         "image_title"=>"blog-bg.jpg"
                                         ]);
    }
    
    public function blog_post3()
    {
        return view('frontend/blog/3',["subtitle"=>"Blog","title"=>"Instagram aurait soudoyé des influenceurs de TikTok ",
                                         "image_title"=>"blog-bg.jpg"
                                         ]);
    }
    
    public function blog_post4()
    {
        return view('frontend/blog/4',["subtitle"=>"Blog","title"=>"Comment Monétiser Votre Site Internet",
                                         "image_title"=>"blog-bg.jpg"
                                         ]);
    }
    
     public function blog_post5()
    {
        return view('frontend/blog/5',["subtitle"=>"Blog","title"=>"10 meilleurs frameworks PHP pour 2020",
                                         "image_title"=>"blog-bg.jpg"
                                         ]);
    }
    
     public function blog_post6()
    {
        return view('frontend/blog/6',["subtitle"=>"Blog","title"=>"Quel Langage de Programmation Apprendre En 2020?",
                                         "image_title"=>"blog-bg.jpg"
                                         ]);

    }
    
    
    
    // service method
    public function bigdata()
    {
        return view('frontend/services/big-data',["subtitle"=>"Services","title"=>"Big Data",
                                         "image_title"=>"page_title_bg.jpg"
                                         ]);

    }
    
    // service method
    public function cryptographie()
    {
        return view('frontend/services/cryptographie',["subtitle"=>"Services","title"=>"Cryptographie",
                                         "image_title"=>"page_title_bg.jpg"
                                         ]);

    }
    
    // service method
    public function auditInformatique()
    {
        return view('frontend/services/audit-informatique',["subtitle"=>"Services","title"=>"Audit Informatique",
                                         "image_title"=>"page_title_bg.jpg"
                                         ]);

    }
    
    // service method
    public function businessIntelligence()
    {
        return view('frontend/services/business-intelligence',["subtitle"=>"Services","title"=>"Business Intelligence",
                                         "image_title"=>"page_title_bg.jpg"
                                         ]);

    }
    
    // service method
    public function developpementDesktop()
    {
        return view('frontend/services/developpement-desktop',["subtitle"=>"Services","title"=>"Développement Desktop",
                                         "image_title"=>"page_title_bg.jpg"
                                         ]);

    }
    
    // service method
    public function developpementMobile()
    {
        return view('frontend/services/developpement-mobile',["subtitle"=>"Services","title"=>"Développement Mobile",
                                         "image_title"=>"page_title_bg.jpg"
                                         ]);

    }
    
    // service method
    public function developpementWeb()
    {
        return view('frontend/services/developpement-web',["subtitle"=>"Services","title"=>"Développement Web",
                                         "image_title"=>"page_title_bg.jpg"
                                         ]);

    }
    
    // service method
    public function intelligenceArtificielle()
    {
        return view('frontend/services/intelligence-artificielle',["subtitle"=>"Services","title"=>"Intelligence Artificielle",
                                         "image_title"=>"page_title_bg.jpg"
                                         ]);

    }
    
    // service method
    public function marketingDigital()
    {
        return view('frontend/services/marketing-digital',["subtitle"=>"Services","title"=>"Marketing Digital",
                                         "image_title"=>"page_title_bg.jpg"
                                         ]);

    }
    
    // service method
    public function reseauInformatique()
    {
        return view('frontend/services/reseaux-informatique',["subtitle"=>"Services","title"=>"Réseaux Informatique",
                                         "image_title"=>"page_title_bg.jpg"
                                         ]);

    }
    
    // service method
    public function securiteInformatique()
    {
        return view('frontend/services/securite-informatique',["subtitle"=>"Services","title"=>"Sécurite Informatique",
                                         "image_title"=>"page_title_bg.jpg"
                                         ]);

    }
    
    // service method
    public function communityManagement()
    {
        return view('frontend/services/community-management',["subtitle"=>"Services","title"=>"Community Management",
                                         "image_title"=>"page_title_bg.jpg"
                                         ]);

    }
    
     // PHP framework method
    public function digitaltransformation()
    {
        return view('frontend/services/15-secrets-of-digital-transformation',["subtitle"=>"Blog","title"=>"15 secrets of digital transformation",
                                         "image_title"=>"page_title_bg.jpg"
                                         ]);

    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
