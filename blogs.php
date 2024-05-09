<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

?>

<!DOCTYPE html> 
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Blogs</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
   <link rel="stylesheet" href="css2/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css2/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css2/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css2/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css2/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css2/style.css" type="text/css">

</head>
<body>
   
<!-- header section starts  -->
<?php include 'components/user_header.php'; ?>
<!-- header section ends -->

<div class="heading">
   <h3>Our Blogs</h3>
   <p><a href="home.php">Home</a> <span> / Blogs</span></p>
   <div class="custom-shape-divider-bottom-1703159485">
    <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
        <path d="M0,0V46.29c47.79,22.2,103.59,32.17,158,28,70.36-5.37,136.33-33.31,206.8-37.5C438.64,32.43,512.34,53.67,583,72.05c69.27,18,138.3,24.88,209.4,13.08,36.15-6,69.85-17.84,104.45-29.34C989.49,25,1113-14.29,1200,52.47V0Z" opacity=".25" class="shape-fill"></path>
        <path d="M0,0V15.81C13,36.92,27.64,56.86,47.69,72.05,99.41,111.27,165,111,224.58,91.58c31.15-10.15,60.09-26.07,89.67-39.8,40.92-19,84.73-46,130.83-49.67,36.26-2.85,70.9,9.42,98.6,31.56,31.77,25.39,62.32,62,103.63,73,40.44,10.79,81.35-6.69,119.13-24.28s75.16-39,116.92-43.05c59.73-5.85,113.28,22.88,168.9,38.84,30.2,8.66,59,6.17,87.09-7.5,22.43-10.89,48-26.93,60.65-49.24V0Z" opacity=".5" class="shape-fill"></path>
        <path d="M0,0V5.63C149.93,59,314.09,71.32,475.83,42.57c43-7.64,84.23-20.12,127.61-26.46,59-8.63,112.48,12.24,165.56,35.4C827.93,77.22,886,95.24,951.2,90c86.53-7,172.46-45.71,248.8-84.81V0Z" class="shape-fill"></path>
    </svg>
</div>
   
</div>


<!-- blogs section starts  -->


    <!-- Hero Section Begin -->
    <section class="hero">
        <div class="hero__slider owl-carousel">
            <div class="hero__item">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-6 p-0">
                            <div class="hero__inside__item hero__inside__item--wide set-bg"
                                data-setbg="images/book/blog1.jpg">
                                <div class="hero__inside__item__text">
                                    <div class="hero__inside__item--meta">
                                        <span>08 </span>
                                        <p>Aug</p>
                                    </div>
                                    <div class="hero__inside__item--text">
                                        <ul class="label">
                                            <li>Personal Development</li>
                                            <li>Mental Health</li>
                                        </ul>
                                        <a href="https://www.nuvancehealth.org/health-tips-and-news/physical-and-mental-health-benefits-of-reading-books#:~:text=Research%20shows%20that%20regular%20reading,promotes%20mental%20and%20emotional%20fitness."style="text-decoration: none;" >
                                            <h4>How reading helps our mental health and  <br /> encourages self-reflection</h4> </a>
                                        <ul class="widget">
                                            <li>by <span>Admin</span></li>
                                            <li>3 min read</li>
                                            <li>20 Comment</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6  p-0">
                            <div class="hero__inside__item hero__inside__item--small set-bg"
                                data-setbg="images/book/blog2.jpg">
                                <div class="hero__inside__item__text">
                                    <div class="hero__inside__item--meta">
                                        <span>09</span>
                                        <p>April</p>
                                    </div>
                                    <div class="hero__inside__item--text">
                                        <ul class="label">
                                            <li>Personal Development</li>
                                            <li>Recommendation</li>
                                        </ul>
                                        <a href="https://divbyzero.com/blog/personal-growth-books/" style="text-decoration: none;">
                                            <h5>Top 10 Nonfiction Books  <br />for Personal Development</h5></a>
                                    </div>
                                </div>
                            </div>
                            <div class="hero__inside__item hero__inside__item--small set-bg"
                                data-setbg="images/book/escape.png">
                                <div class="hero__inside__item__text">
                                    <div class="hero__inside__item--meta">
                                        <span>12</span>
                                        <p>April</p>
                                    </div>
                                    <div class="hero__inside__item--text">
                                        <ul class="label">
                                            <li>Escapism</li>
                                            <li>Research</li>
                                        </ul>
                                        <a href="https://medium.com/@muskankalralko/reading-as-an-escape-from-reality-fe207980c810" style="text-decoration: none;">
                                        <h5>Exploring Escapism <br />Through Reading</h5>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6  p-0">
                            <div class="hero__inside__item set-bg" data-setbg="images/book/blog3.jpg">
                                <div class="hero__inside__item__text">
                                    <div class="hero__inside__item--meta">
                                        <span>08</span>
                                        <p>April</p>
                                    </div>
                                    <div class="hero__inside__item--text">
                                        <ul class="label">
                                            <li>Design</li>
                                            <li>Book</li>
                                        </ul>
                                        <a href="https://www.abookgeek.com/the-art-of-book-cover-design-a-visual-journey-into-the-world-of-books/#:~:text=It%20serves%20as%20a%20visual,%2C%20tone%2C%20and%20target%20audience."style="text-decoration: none;">
                                            <h5>The Influence of Book Cover Design <br />on Reading Experience</h5></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hero__item">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-6 p-0">
                            <div class="hero__inside__item hero__inside__item--wide set-bg"
                                data-setbg="images/book/blog5.jpg">
                                <div class="hero__inside__item__text">
                                    <div class="hero__inside__item--meta">
                                    <span>08</span>
                                        <p>Aug</p>
                                    </div>
                                    <div class="hero__inside__item--text">
                                        <ul class="label">
                                            <li>Personal Development</li>
                                            <li>Mental Health</li>
                                        </ul>
                                        <a href="https://www.nuvancehealth.org/health-tips-and-news/physical-and-mental-health-benefits-of-reading-books#:~:text=Research%20shows%20that%20regular%20reading,promotes%20mental%20and%20emotional%20fitness."style="text-decoration: none;" >
                                            <h4>How reading helps our mental health and  <br /> encourages self-reflection</h4> </a>
                                        <ul class="widget">
                                            <li>by <span>Admin</span></li>
                                            <li>3 min read</li>
                                            <li>20 Comment</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 p-0">
                            <div class="hero__inside__item hero__inside__item--small set-bg"
                                data-setbg="images/book/perdev.jpg">
                                <div class="hero__inside__item__text">
                                    <div class="hero__inside__item--meta">
                                    <span>09</span>
                                        <p>April</p>
                                    </div>
                                    <div class="hero__inside__item--text">
                                        <ul class="label">
                                            <li>Personal Development</li>
                                            <li>Recommendation</li>
                                        </ul>
                                        <a href="https://divbyzero.com/blog/personal-growth-books/" style="text-decoration: none;">
                                            <h5>Top 10 Nonfiction Books  <br />for Personal Development</h5></a>
                                    </div>
                                </div>
                            </div>
                            <div class="hero__inside__item hero__inside__item--small set-bg"
                                data-setbg="images/book/blog7.jpg">
                                <div class="hero__inside__item__text">
                                    <div class="hero__inside__item--meta">
                                    <span>12</span>
                                        <p>April</p>
                                    </div>
                                    <div class="hero__inside__item--text">
                                        <ul class="label">
                                            <li>Escapism</li>
                                            <li>Research</li>
                                        </ul>
                                        <a href="https://medium.com/@muskankalralko/reading-as-an-escape-from-reality-fe207980c810" style="text-decoration: none;">
                                        <h5>Exploring Escapism <br />Through Reading</h5>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 p-0">
                            <div class="hero__inside__item set-bg" data-setbg="images/book/blog8.jpg">
                                <div class="hero__inside__item__text">
                                    <div class="hero__inside__item--meta">
                                    <span>08</span>
                                        <p>April</p>
                                    </div>
                                    <div class="hero__inside__item--text">
                                        <ul class="label">
                                            <li>Design</li>
                                            <li>Book</li>
                                        </ul>
                                        <a href="https://www.abookgeek.com/the-art-of-book-cover-design-a-visual-journey-into-the-world-of-books/#:~:text=It%20serves%20as%20a%20visual,%2C%20tone%2C%20and%20target%20audience."style="text-decoration: none;">
                                            <h5>The Influence of Book Cover Design <br />on Reading Experience</h5></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Categories Section Begin -->
    <section class="categories spad">
        <div class="container">
            <!-- <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="categories__item set-bg" data-setbg="img/categories/cat-1.jpg">
                        <div class="categories__hover__text">
                            <h5>Dinner</h5>
                            <p>28 articles</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="categories__item set-bg" data-setbg="img/categories/cat-2.jpg">
                        <div class="categories__hover__text">
                            <h5>Dinner</h5>
                            <p>28 articles</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="categories__item set-bg" data-setbg="img/categories/cat-3.jpg">
                        <div class="categories__hover__text">
                            <h5>Dinner</h5>
                            <p>28 articles</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="categories__item set-bg" data-setbg="img/categories/cat-4.jpg">
                        <div class="categories__hover__text">
                            <h5>Dinner</h5>
                            <p>28 articles</p>
                        </div>
                    </div>
                </div>
            </div> -->
        </div>
        <div class="categories__post">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-8">
                        <div class="categories__post__item categories__post__item--large">
                            <div class="categories__post__item__pic set-bg"
                                data-setbg="images/book/Atomic-Habits-by-James-Clear.jpg">
                                <div class="post__meta">
                                    <h4>05</h4>
                                    <span>Aug</span>
                                </div>
                            </div>
                            <div class="categories__post__item__text">
                                <ul class="post__label--large">
                                    <li>Personal Development</li>
                                    <li> Motivational</li>
                                </ul>
                                <h3><a href="https://jamesclear.com/atomic-habits"style="text-decoration: none;">"Achieve More with Atomic Habits – Book of the Month Selection!"</a></h3>
                                <ul class="post__widget">
                                    <li>by <span>Admin</span></li>
                                    <li>3 min read</li>
                                    <li>20 Comment</li>
                                </ul>
                                <p>Atomic Habits is the most comprehensive and practical guide on how to create good habits, break bad ones, and get 1 percent better every day. I do not believe you will find a more actionable book on the subject of habits and improvement.
                                    If you’re having trouble changing your habits, the problem isn’t you. The problem is your system.
                                    Bad habits repeat themselves not because you don’t want to change but because you have the wrong system for change. This is one of the core philosophies of Atomic Habits: You do not rise to the level of your goals. You fall to the level of your systems. In this book, you’ll get a proven plan that can take you to new heights.</p>
                                <a href="https://jamesclear.com/atomic-habits" style="text-decoration: none;" class="primary-btn">Read more</a>
                                <div class="post__social">
                                    <span>Share</span>
                                    <a href="#"><i class="fa-brands fa-facebook"></i> <span>82</span></a>
                                    <a href="#"><i class="fa-brands fa-instagram"></i> <span>24</span></a>
                                    <a href="#"><i class="fa fa-envelope-o"></i> <span>08</span></a>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="categories__post__item">
                                    <div class="categories__post__item__pic small__item set-bg"
                                        data-setbg="images/book//Books-Vs-Movies.png">
                                        <div class="post__meta">
                                            <h4>22</h4>
                                            <span>Sep</span>
                                        </div>
                                    </div>
                                    <div class="categories__post__item__text">
                                        <span class="post__label">Debate</span>
                                        <h3><a href="https://blogs.libraries.indiana.edu/mediabeat/2018/03/19/books-vs-movies-the-age-old-debate/"style="text-decoration: none;">Page to Screen:The Great Debate of Books vs. Movies</a></h3>
                                        <ul class="post__widget">
                                            <li>by <span>Admin</span></li>
                                            <li>3 min read</li>
                                            <li>20 Comment</li>
                                        </ul>
                                        <p>Explore the timeless debate of Books vs. Movies with this captivating journey. Delve into the unique realms of literature and cinema, comparing narrative techniques, character development, and storytelling magic.</p>
                                    </div>
                                </div>
                                <div class="categories__post__item">
                                    <div class="categories__post__item__pic set-bg"
                                        data-setbg="images/book/storytelling.jpg">
                                        <div class="post__meta">
                                            <h4>22</h4>
                                            <span>Oct</span>
                                        </div>
                                    </div>
                                    <div class="categories__post__item__text">
                                        <ul class="post__label--large">
                                            <li>Article</li>
                                            <li>Blog</li>
                                        </ul>
                                        <h3><a href="https://reporter.rit.edu/tech/evolution-storytelling" style="text-decoration: none;">The Evolution of Storytelling</a></h3>
                                        <ul class="post__widget">
                                            <li>by <span>Admin</span></li>
                                            <li>3 min read</li>
                                            <li>20 Comment</li>
                                        </ul>
                                        <p>
                                            The Evolution of Storytelling encapsulates the ever-changing ways humans convey narratives, from ancient oral traditions to modern multimedia platforms. It's a testament to our innate desire to share experiences, emotions, and ideas through the captivating power of storytelling, transcending time and technological advancements. </p>
                                    </div>
                                </div>
                                <div class="categories__post__item">
                                    <div class="categories__post__item__pic set-bg"
                                        data-setbg="images/mysthri.png">
                                        <div class="post__meta">
                                            <h4>26</h4>
                                            <span>Oct</span>
                                        </div>
                                    </div>
                                    <div class="categories__post__item__text">
                                        <ul class="post__label--large">
                                            <li>Recommendation</li>
                                            <li>Review</li>
                                        </ul>
                                        <h3><a href="https://novelonmymind.com/best-thriller-mystery-books/" style="text-decoration: none;">Top 10 Mystery & Thriller Novels</a></h3>
                                        <ul class="post__widget">
                                            <li>by <span>Admin</span></li>
                                            <li>3 min read</li>
                                            <li>20 Comment</li>
                                        </ul>
                                        <p>Enter the heart-pounding world of the Top 10 Thriller and Mystery novels, where every plot twist and revelation keeps readers on the edge of their seats. From the psychological depths of 'Gone Girl' to the gripping suspense of 'The Girl with the Dragon Tattoo,' these stories will leave you breathless and craving more.</p>
                                    </div>
                                </div>
                                <div class="categories__post__item">
                                    <div class="categories__post__item__pic smaller__large set-bg"
                                        data-setbg="images/book/blog7.jpg">
                                        <div class="post__meta">
                                            <h4>08</h4>
                                            <span>Aug</span>
                                        </div>
                                    </div>
                                    <div class="categories__post__item__text">
                                        <span class="post__label">Recommendation</span>
                                        <h3><a href="https://time.com/collection/100-best-fantasy-books/" style="text-decoration: none;">Worlds of Wonder: The Top 100 Fantasy Books For You</a></h3>
                                        <ul class="post__widget">
                                            <li>by <span>Admin</span></li>
                                            <li>3 min read</li>
                                            <li>20 Comment</li>
                                        </ul>
                                        <p>Embark on an enchanting odyssey through the realms of magic and adventure with the Top 100 Fantasy Books, a curated collection spanning diverse worlds and captivating tales. From epic quests to mythical creatures, this compendium promises to ignite the imagination and transport readers to extraordinary lands where anything is possible.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="categories__post__item">
                                    <div class="categories__post__item__pic smaller__large set-bg"
                                        data-setbg="images/book/blog4.jpg">
                                        <div class="post__meta">
                                            <h4>30</h4>
                                            <span>Aug</span>
                                        </div>
                                    </div>
                                    <div class="categories__post__item__text">
                                        <span class="post__label">Article</span>
                                        <h3><a href="https://irisreading.com/can-reading-help-your-vocabulary/" style="text-decoration : none;">Ink and Insight: How Reading Expands Your Vocabulary</a>
                                        </h3>
                                        <ul class="post__widget">
                                            <li>by <span>Admin</span></li>
                                            <li>3 min read</li>
                                            <li>20 Comment</li>
                                        </ul>
                                        <p>Books act as linguistic playgrounds, offering a diverse array of words and expressions that expand our vocabulary through exposure and context. By immersing ourselves in literature, we absorb new terms and concepts, enhancing our language skills and enriching our ability to articulate ideas with clarity and precision.</p>
                                    </div>
                                </div>
                                <div class="categories__post__item__small">
                                    <img src="img/categories/categories-post/quote.png" alt="">
                                    <p>A reader lives a thousand lives before he dies. The man who never reads lives only one..</p>
                                    <div class="posted__by"> George R.R. Martin</div>
                                </div>
                                <div class="categories__post__item">
                                    <div class="categories__post__item__pic smaller__large set-bg"
                                        data-setbg="images/book/what-is-self-care-jpg.jpg">
                                        <div class="post__meta">
                                            <h4>05</h4>
                                            <span>Nov</span>
                                        </div>
                                    </div>
                                    <div class="categories__post__item__text">
                                        <span class="post__label">Article</span>
                                        <h3><a href="https://www.frostbeardstudio.com/blogs/news/reading-as-a-form-of-self-care-getting-lost-in-a-story" style="text-decoration : none;">Reading as a Form of Self-Care</a></h3>
                                        <ul class="post__widget">
                                            <li>by <span>Admin</span></li>
                                            <li>3 min read</li>
                                            <li>20 Comment</li>
                                        </ul>
                                        <p>Engaging in reading serves as a nurturing act of self-care, offering an escape from the stresses of daily life and providing a sanctuary for relaxation and rejuvenation. Through the pages of a book, we find solace, inspiration, and a comforting refuge that replenishes our spirit and fosters emotional well-being.</p>
                                    </div>
                                </div>
                                <div class="categories__post__item">
                                    <div class="categories__post__item__pic set-bg"
                                        data-setbg="images/book/critical.jpg">
                                        <div class="post__meta">
                                            <h4>25</h4>
                                            <span>Nov</span>
                                        </div>
                                    </div>
                                    <div class="categories__post__item__text">
                                        <ul class="post__label--large">
                                            <li>Article</li>
                                            <li>Research</li>
                                        </ul>
                                        <h3><a href="https://www.sciencedirect.com/science/article/pii/S2210831911000373"  style="text-decoration : none;">The Connection Between Reading and Critical Thinking</a></h3>
                                        <ul class="post__widget">
                                            <li>by <span>Admin</span></li>
                                            <li>3 min read</li>
                                            <li>20 Comment</li>
                                        </ul>
                                        <p>
                                        Reading is the cornerstone of critical thinking, as it cultivates analytical skills by prompting readers to evaluate, question, and interpret information from diverse perspectives. Through exposure to varied viewpoints and complex narratives, readers hone their ability to discern truth, challenge assumptions, and engage in thoughtful inquiry.</p>
                                    </div>
                                </div>

                                
                            </div>
                            
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="sidebar__item">
                            <div class="sidebar__about__item">
                                <div class="sidebar__item__title">
                                    <h6>Author Spotlight</h6>
                                </div>
                                <img src="images/book/featured author of the monthc.jpg" alt="">
                                <h6>Hi every one! I,m <span>J.K. Rowling</span></h6>
                                <p>J.K. Rowling, best known as the creator of the magical world of Harry Potter, has captivated millions of readers worldwide with her enchanting storytelling and richly imagined characters. Beyond her literary achievements, Rowling's philanthropic endeavors and advocacy for social issues, including children's welfare and literacy, have earned her widespread acclaim and admiration. Her journey from struggling writer to literary icon serves as an inspiring testament to the power of imagination, resilience, and the transformative impact of storytelling.</p>
                                <a href="https://www.jkrowling.com/about/" style="text-decoration:none;" class="primary-btn">Read more</a>
                            </div>
                            <div class="sidebar__follow__item">
                                <div class="sidebar__item__title">
                                    <h6>Follow Us</h6>
                                </div>
                                <div class="sidebar__item__follow__links">
                                    <a href="#"><i class="fa-brands fa-facebook"></i></a>
                                    <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
                                    <a href="#"><i class="fa-brands fa-youtube"></i></a>
                                    <a href="#"><i class="fa-brands fa-instagram"></i></a>
                                    <a href="#"><i class="fa fa-envelope-o"></i></a>
                                </div>
                            </div>
                            <div class="sidebar__feature__item">
                                <div class="sidebar__item__title">
                                    <h6>Feature Posts</h6>
                                </div>
                                <div class="sidebar__feature__item__large set-bg"
                                    data-setbg="/images/book/feat.jpg">
                                    <div class="sidebar__feature__item__large--text">
                                        
                                    </div>
                                </div>
                                <div class="sidebar__feature__item__list">
                                    <div class="sidebar__feature__item__list__single">
                                        <div class="post__meta">
                                            <h4>08</h4>
                                            <span>Aug</span>
                                        </div>
                                        <div class="post__text">
                                            <span>Trivia</span>
                                            <h5><a href="https://medium.com/midform/eccentric-habits-of-famous-writers-b879cef8736">Unconventional Reading and Writing Habits of Famous Authors</a></h5>
                                        </div>
                                    </div>
                                    <div class="sidebar__feature__item__list__single">
                                        <div class="post__meta">
                                            <h4>05</h4>
                                            <span>Aug</span>
                                        </div>
                                        <div class="post__text">
                                            <span>Article</span>
                                            <h5><a href="https://www.literaturelust.com/post/4-reasons-why-reading-out-loud-is-actually-good-for-you">The Benefits of Reading Aloud</a></h5>
                                        </div>
                                    </div>
                                    <div class="sidebar__feature__item__list__single">
                                        <div class="post__meta">
                                            <h4>26</h4>
                                            <span>Jul</span>
                                        </div>
                                        <div class="post__text">
                                            <span>Article</span>
                                            <h5><a href="https://www.readingranch.com/the-link-between/#:~:text=From%20a%20psychological%20standpoint%2C%20reading,of%20emotional%20intelligence%3A%20social%20awareness.">The Intersection of Reading and Emotional Intelligence</a></h5>
                                        </div>
                                    </div>
                                    <div class="sidebar__feature__item__list__single">
                                        <div class="post__meta">
                                            <h4>16</h4>
                                            <span>Jul</span>
                                        </div>
                                        <div class="post__text">
                                            <span>Article</span>
                                            <h5><a href="https://medium.com/illumination/the-power-of-literature-how-it-shapes-society-and-culture-28dc42f04222#:~:text=In%20conclusion%2C%20literature%20has%20a,potential%20to%20spark%20social%20change."> How Literature Shapes Cultural Understanding</a></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="sidebar__item__banner">
                                <img src="/images/book/reading-quote2-1574808436.jpg" alt="">
                            </div>
                            
                            <div class="sidebar__subscribe__item">
                                <div class="sidebar__item__title">
                                    <h6>Subscribe</h6>
                                </div>
                                <p>Subscribe to our newsletter and get our newest updates right on your inbox.</p>
                                <form action="#">
                                    <input type="text" class="email-input" placeholder="Your email">
                                    <label for="s-agree-check">
                                        I agree to the terms & conditions
                                        <input type="checkbox" id="s-agree-check">
                                        <span class="checkmark"></span>
                                    </label>
                                    <button type="submit" class="site-btn">Subscribe</button>
                                </form>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Categories Section End -->



<!-- footer section starts  -->
 <?php include 'components/footer.php'; ?> 
<!-- footer section ends -->






<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
    <script src="js/script.js"></script>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
<script>
    

var swiper = new Swiper(".reviews-slider", {
   loop:true,
   grabCursor: true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
   },
   breakpoints: {
      0: {
      slidesPerView: 1,
      },
      700: {
      slidesPerView: 2,
      },
      1024: {
      slidesPerView: 3,
      },
   },
});

</script>

</body>
</html>