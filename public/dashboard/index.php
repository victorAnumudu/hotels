

<?php 
    require "../../private/file_path.php"; 

    // $page_title = "Home";
    $dashboard = true;
?>

<?php 
require DASHBOARD_PATH .'/shared/header_aside.php';
?>
     <img class="main_image" src="<?php echo url_for("/images/home/slideshow/slide_2.jpg") ?>" alt="main image">   
    <div class="section_expectation">
        <div class="expectation_left">
            <h2>EXCEEDING EXPECTATIONS</h2>
            <p>We believe in working in full partnership with our owners & investors to create the best experience for you, our guests and associates.</p>
        </div>
        
        <div class="expectation_right">
            <p>As an award-winning hotel management, ownership and development company, Concord Hospitality Enterprises Company has spent the last three decades partnering with owners and investors on more than $2.5 billion in properties across the United States and Canada.</p>
            <p>
            Success is achieved through hard work, integrity and transparency—all critical components of the relationship with Concord Hospitality’s owners and investment partners.</p>
            <p>Concord Hospitality consistently ranks as one of the top hotel companies in North America, receiving numerous awards and accolades from the industry’s top tier brands, including recent recognition as a Great Place to Work</p>
        </div>
    </div>
    <div class="section_differentiators">
        <h1>DIFFERENTIATORS</h1>
        <div class="differentiators">
            <div class="differentiator">
                <img src="<?php echo url_for("/dashboard/images/peoples.jpg") ?>" alt="what makes us different" class="differentiator_img">
                <h3>PEOPLE</h3>
                <p>
                We are proud of our people. Certified as a "Great Place to Work", we rank in the top 100 Best Companies for both Women and Millennials. Our commitment to diversity, culture, and ongoing training helps us succeed as a team everyday.
                </p>
            </div>
            <div class="differentiator">
                <img src="<?php echo url_for("/dashboard/images/expertise.jpg") ?>" alt="what makes us different" class="differentiator_img">
                <h3>EXPERTISE</h3>
                <p>Over 35 years of experience for premier brands ranging from lifestyle to upscale select service to independent Bar and Restaurants. Our track record of superior management and quality construction has been consistently awarded.
                </p>
            </div>
            <div class="differentiator">
                <img src="<?php echo url_for("/dashboard/images/cornerstones.jpg") ?>" alt="what makes us different" class="differentiator_img">
                <h3>CORNERSTONES</h3>
                <p>Our cornerstones are the principles that drive us to meet new opportunity and challenges. Quality, integrity, community, profitability and fun have built our strong legacy of high-valued partnerships with our owners and investors.
                </p>
            </div>      
        </div>
    </div>


<?php require DASHBOARD_PATH .'/shared/footer.php'; ?>