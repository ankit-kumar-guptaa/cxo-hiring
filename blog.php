<?php include "include/assets.php"?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Executive Leadership Insights | CXO Hire</title>
    <meta name="description" content="Cutting-edge perspectives on C-suite leadership, talent strategy, and executive recruitment from CXO Hire experts.">
    <meta name="keywords" content="executive search, C-suite leadership, CEO insights, board recruitment, talent strategy">
    
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="assets/images/logo.jpg">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/blog.css">
</head>

<body class="cxo-hire-blog">
    <?php include "include/header.php"; ?>

    <!-- ===== BLOG HERO SECTION ===== -->
    <section class="blog-hero-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <div class="brand-logo-wrapper mb-4">
                        <img src="logo.jpg" alt="CXO Hire Logo" class="brand-logo">
                    </div>
                    <h1 class="blog-main-title">CXO <span>Insights</span></h1>
                    <p class="blog-subtitle">Cutting-edge perspectives on leadership, talent strategy, and C-suite excellence</p>
                    
                    <!-- Advanced Search -->
                    <div class="search-container">
                        <form id="blogSearchForm" class="search-form">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search articles..." id="blogSearchInput" aria-label="Search articles">
                                <button class="btn btn-search" type="submit">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>
                        </form>
                        <div id="searchResults" class="search-results-dropdown"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== MAIN BLOG CONTENT ===== -->
    <main class="blog-main-content">
        <div class="container">
            <div class="row">
                <!-- Main Content Column -->
                <div class="col-lg-8">
                    <!-- Featured Article -->
                    <article class="featured-article">
                        <div class="article-badge">Featured</div>
                        <div class="article-image-container">
                            <img src="https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?ixlib=rb-1.2.1&auto=format&fit=crop&w=1200&q=80" 
                                 alt="Digital transformation leadership" 
                                 class="article-image">
                        </div>
                        <div class="article-content">
                            <div class="article-meta">
                                <span class="article-category">Leadership</span>
                                <span class="article-date">May 28, 2023</span>
                                <span class="article-read-time">6 min read</span>
                            </div>
                            <h2 class="article-title">Redefining C-Suite Leadership for the Digital Era</h2>
                            <p class="article-excerpt">How tomorrow's executives must blend traditional leadership with digital fluency to drive transformation and innovation in their organizations.</p>
                            <div class="article-author">
                                <!-- <img src="https://randomuser.me/api/portraits/women/44.jpg" 
                                     alt="Author Sarah Johnson" 
                                     class="author-avatar"> -->
                                <div class="author-info">
                                    <span class="author-name">Admin</span>
                                    <span class="author-title">Leadership Practice Lead</span>
                                </div>
                            </div>
                            <a href="redefining-c-suite-leadership.php" class="article-link">Read Article <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </article>

                    <!-- Category Filter -->
                    <div class="category-filter">
                        <div class="filter-tabs">
                            <button class="filter-tab active" data-category="all">All Articles</button>
                            <button class="filter-tab" data-category="leadership">Leadership</button>
                            <button class="filter-tab" data-category="recruitment">Recruitment</button>
                            <button class="filter-tab" data-category="trends">Industry Trends</button>
                            <button class="filter-tab" data-category="diversity">Diversity</button>
                            <button class="filter-tab" data-category="technology">Technology</button>
                        </div>
                    </div>

                    <!-- Articles Grid -->
                    <div class="articles-grid" id="articlesContainer">
                        <!-- Article 1 -->
                        <article class="article-card" data-categories="leadership,diversity">
                            <div class="article-image-container">
                                <img src="https://images.unsplash.com/photo-1521791136064-7986c2920216?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" 
                                     alt="Diverse executive team" 
                                     class="article-image">
                            </div>
                            <div class="article-content">
                                <div class="article-meta">
                                    <span class="article-category">Leadership</span>
                                    <span class="article-date">Jun 12, 2023</span>
                                </div>
                                <h3 class="article-title">The Power of Cognitive Diversity in Executive Teams</h3>
                                <p class="article-excerpt">How varied thinking styles in leadership teams drive innovation and better decision making across industries.</p>
                                <a href="blog-detail.php" class="article-link">Read More <i class="fas fa-arrow-right"></i></a>
                            </div>
                        </article>

                        <!-- Article 2 -->
                        <article class="article-card" data-categories="technology,trends">
                            <div class="article-image-container">
                                <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" 
                                     alt="Mining executive analyzing data" 
                                     class="article-image">
                            </div>
                            <div class="article-content">
                                <div class="article-meta">
                                    <span class="article-category">Technology</span>
                                    <span class="article-date">Jun 5, 2023</span>
                                </div>
                                <h3 class="article-title">AI in Executive Decision Making: Opportunities & Risks</h3>
                                <p class="article-excerpt">Exploring how artificial intelligence is transforming C-suite decision processes across industries.</p>
                                <a href="blog-detail.php" class="article-link">Read More <i class="fas fa-arrow-right"></i></a>
                            </div>
                        </article>

                        <!-- Article 3 -->
                        <article class="article-card" data-categories="recruitment,leadership">
                            <div class="article-image-container">
                                <img src="https://images.unsplash.com/photo-1579621970563-ebec7560ff3e?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" 
                                     alt="Executives discussing strategy" 
                                     class="article-image">
                            </div>
                            <div class="article-content">
                                <div class="article-meta">
                                    <span class="article-category">Recruitment</span>
                                    <span class="article-date">May 22, 2023</span>
                                </div>
                                <h3 class="article-title">The 5 Non-Negotiables When Hiring Transformational Leaders</h3>
                                <p class="article-excerpt">Key attributes to look for when identifying executives who can drive meaningful organizational change.</p>
                                <a href="blog-detail.php" class="article-link">Read More <i class="fas fa-arrow-right"></i></a>
                            </div>
                        </article>

                        <!-- Article 4 -->
                        <article class="article-card" data-categories="trends,technology">
                            <div class="article-image-container">
                                <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" 
                                     alt="Team of executives collaborating" 
                                     class="article-image">
                            </div>
                            <div class="article-content">
                                <div class="article-meta">
                                    <span class="article-category">Trends</span>
                                    <span class="article-date">May 15, 2023</span>
                                </div>
                                <h3 class="article-title">Metaverse Leadership: Preparing Your C-Suite for Web3</h3>
                                <p class="article-excerpt">How forward-thinking organizations are developing executive capabilities for the next digital frontier.</p>
                                <a href="blog-detail.php" class="article-link">Read More <i class="fas fa-arrow-right"></i></a>
                            </div>
                        </article>
                    </div>

                    <!-- Pagination -->
                    <nav class="blog-pagination">
                        <ul class="pagination-list">
                            <li class="pagination-item">
                                <a href="#" class="pagination-link prev">
                                    <i class="fas fa-chevron-left"></i>
                                </a>
                            </li>
                            <li class="pagination-item active">
                                <a href="#" class="pagination-link">1</a>
                            </li>
                            <li class="pagination-item">
                                <a href="#" class="pagination-link">2</a>
                            </li>
                            <li class="pagination-item">
                                <a href="#" class="pagination-link">3</a>
                            </li>
                            <li class="pagination-item">
                                <a href="#" class="pagination-link next">
                                    <i class="fas fa-chevron-right"></i>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>

                <!-- Sidebar Column -->
                <aside class="col-lg-4">
                    <div class="blog-sidebar">
                        <!-- About Widget -->
                        <div class="sidebar-widget about-widget">
                            <h3 class="widget-title">About CXO Insights</h3>
                            <p>Our executive search specialists share proven strategies for identifying, attracting, and developing transformative leadership talent for organizations worldwide.</p>
                            <a href="about.php" class="widget-link">Learn More About Us <i class="fas fa-arrow-right"></i></a>
                        </div>

                        <!-- Popular Articles Widget -->
                        <div class="sidebar-widget popular-widget">
                            <h3 class="widget-title">Trending Articles</h3>
                            <div class="popular-articles">
                                <!-- Article 1 -->
                                <article class="popular-article">
                                    <div class="article-image-container">
                                        <img src="https://images.unsplash.com/photo-1542744173-8e7e53415bb0?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" 
                                             alt="Boardroom discussion" 
                                             class="article-image">
                                    </div>
                                    <div class="article-content">
                                        <h4 class="article-title">Board Dynamics in High-Growth Companies</h4>
                                        <div class="article-meta">
                                            <span class="article-date">May 8, 2023</span>
                                            <span class="article-read-time">5 min read</span>
                                        </div>
                                    </div>
                                    <a href="blog-detail.php" class="article-link"></a>
                                </article>

                                <!-- Article 2 -->
                                <article class="popular-article">
                                    <div class="article-image-container">
                                        <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" 
                                             alt="Data analysis meeting" 
                                             class="article-image">
                                    </div>
                                    <div class="article-content">
                                        <h4 class="article-title">Data-Driven Executive Hiring</h4>
                                        <div class="article-meta">
                                            <span class="article-date">Apr 30, 2023</span>
                                            <span class="article-read-time">7 min read</span>
                                        </div>
                                    </div>
                                    <a href="blog-detail.php" class="article-link"></a>
                                </article>
                            </div>
                        </div>

                        <!-- Newsletter Widget -->
                        <div class="sidebar-widget newsletter-widget">
                            <h3 class="widget-title">CXO Leadership Digest</h3>
                            <p>Subscribe to receive our latest executive insights and leadership strategies.</p>
                            <form class="newsletter-form">
                                <!-- <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Your Name">
                                </div> -->
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Email Address">
                                </div>
                                <button type="submit" class="btn-subscribe">Subscribe</button>
                            </form>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </main>

    <?php include "include/footer.php"; ?>

    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- Custom Blog Scripts -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Search functionality
            const searchForm = document.getElementById('blogSearchForm');
            const searchInput = document.getElementById('blogSearchInput');
            const searchResults = document.getElementById('searchResults');
            const articles = document.querySelectorAll('.article-card');
            
            // Sample search data (in real implementation, fetch from server)
            const searchData = [
                {
                    title: "Redefining C-Suite Leadership for the Digital Era",
                    url: "blog-detail.php",
                    excerpt: "How tomorrow's executives must blend traditional leadership with digital fluency...",
                    category: "Leadership"
                },
                {
                    title: "The Power of Cognitive Diversity in Executive Teams",
                    url: "blog-detail.php",
                    excerpt: "How varied thinking styles in leadership teams drive innovation...",
                    category: "Leadership"
                },
                {
                    title: "AI in Executive Decision Making: Opportunities & Risks",
                    url: "blog-detail.php",
                    excerpt: "Exploring how artificial intelligence is transforming C-suite decision processes...",
                    category: "Technology"
                }
            ];
            
            // Search function
            searchInput.addEventListener('input', function() {
                const searchTerm = this.value.toLowerCase();
                searchResults.innerHTML = '';
                
                if (searchTerm.length > 2) {
                    const filteredResults = searchData.filter(item => 
                        item.title.toLowerCase().includes(searchTerm) || 
                        item.excerpt.toLowerCase().includes(searchTerm)
                    );
                    
                    if (filteredResults.length > 0) {
                        filteredResults.forEach(result => {
                            const resultItem = document.createElement('a');
                            resultItem.href = result.url;
                            resultItem.className = 'search-result';
                            resultItem.innerHTML = `
                                <span class="result-category">${result.category}</span>
                                <h4 class="result-title">${result.title}</h4>
                                <p class="result-excerpt">${result.excerpt}</p>
                            `;
                            searchResults.appendChild(resultItem);
                        });
                        searchResults.style.display = 'block';
                    } else {
                        searchResults.innerHTML = '<div class="no-results">No matching articles found</div>';
                        searchResults.style.display = 'block';
                    }
                } else {
                    searchResults.style.display = 'none';
                }
            });
            
            // Close search results when clicking outside
            document.addEventListener('click', function(e) {
                if (!searchForm.contains(e.target)) {
                    searchResults.style.display = 'none';
                }
            });
            
            // Category filter functionality
            const filterTabs = document.querySelectorAll('.filter-tab');
            filterTabs.forEach(tab => {
                tab.addEventListener('click', function() {
                    const category = this.dataset.category;
                    
                    // Update active tab
                    filterTabs.forEach(t => t.classList.remove('active'));
                    this.classList.add('active');
                    
                    // Filter articles
                    articles.forEach(article => {
                        if (category === 'all' || article.dataset.categories.includes(category)) {
                            article.style.display = 'block';
                        } else {
                            article.style.display = 'none';
                        }
                    });
                });
            });
        });
    </script>
</body>
</html>