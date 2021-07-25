
<?php 
    require "../../private/file_path.php"; 

    $page_title = "About";
    $about = true;
?>



<?php 
    require SHARED_PATH . '/nav.php';
    require SHARED_PATH . '/header.php';
?>

<section>
    <!-- About section -->
    <div class="about">
        <h2 class="section_heading">About us</h2>
        <p class="section_paragraph section_paragraph_justified">Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque sequi repudiandae esse enim sed natus! Ea impedit quam magnam autem rem? Perspiciatis quia iure ea velit nostrum. Animi doloremque placeat sint architecto omnis! Voluptatum eos, ad minima pariatur quam quasi animi alias est soluta adipisci? Aliquam odit recusandae quae ex in, id cum dignissimos vero quasi delectus officia. Tempore, nihil vel! Aliquam autem totam reprehenderit rerum ducimus iste eveniet cum illo quo corporis necessitatibus sit itaque similique pariatur nulla consectetur neque, veritatis laborum adipisci, alias qui. Ut blanditiis veniam fugit repellendus. Quas ipsa magnam debitis consectetur nemo libero minima expedita iste earum ex unde ipsam autem, nihil voluptatibus quidem voluptas quae, esse repellat atque eos aliquam eius cum temporibus laborum? Sequi, deserunt voluptate. Tempore deserunt nulla velit. Quis aliquid ea ipsa sunt dolores distinctio obcaecati sint excepturi quasi rem, deleniti a iusto asperiores repellat perferendis. Reprehenderit quae, sit nihil sint explicabo voluptatibus! Iusto quasi, ut, distinctio dolorum dolores qui reiciendis dolore quibusdam veniam a, soluta asperiores illum dolor atque exercitationem vel. Blanditiis perferendis consequatur harum placeat odio soluta et a neque eius vitae. Voluptate exercitationem tempore eveniet, beatae tempora maiores corrupti odio quidem rerum officiis, reprehenderit et pariatur nobis magni sunt maxime non soluta omnis perspiciatis! Quae veritatis adipisci ducimus voluptatum blanditiis nulla animi, omnis, nesciunt corrupti, veniam laudantium impedit sed reiciendis aliquid illum voluptate saepe est amet rem repudiandae hic. Quisquam est quas illum nesciunt deleniti, accusantium dolor dignissimos illo nulla voluptates ratione, numquam, sit impedit totam ullam quis! Ipsum est, dolor nam cumque error recusandae nulla quidem vel accusantium aliquam porro, quas aliquid ex aut ullam tenetur culpa itaque autem. Voluptatum, omnis dignissimos soluta magni natus nostrum ratione commodi vel modi quis rem error non ex quae? Porro neque, repellendus itaque enim rem ipsam fugiat eveniet explicabo, vero quae eius consequuntur recusandae nisi exercitationem expedita fuga minus molestias consectetur. Blanditiis eos laboriosam repellat eum aliquid velit voluptatibus, harum eius perspiciatis omnis asperiores minus ipsa consectetur vero amet itaque sunt vel suscipit debitis enim. Saepe deserunt soluta officia. Dolores totam, dolor tempora incidunt laudantium id nesciunt, repellat corporis, placeat cum facere. Nemo quibusdam autem nihil sunt nobis sit assumenda eveniet numquam fugiat soluta asperiores, nam vel facere placeat blanditiis dolorem obcaecati facilis ut. Quae nulla ipsam minima voluptates, incidunt sit suscipit blanditiis cum autem odio explicabo temporibus tempore molestiae impedit facere eaque cupiditate rerum pariatur consequatur. Libero temporibus explicabo quis voluptatem modi impedit error, amet nesciunt ipsam quam aliquam. Eum earum quisquam ut cumque pariatur? Perspiciatis, sapiente excepturi! Culpa laborum inventore pariatur adipisci debitis, id ipsum quibusdam optio ratione. Quo ea voluptas explicabo expedita doloribus sed, earum alias, quidem nisi necessitatibus quisquam tempore obcaecati deleniti architecto, itaque magni. Earum dolorem, dolores aut numquam reiciendis iste rerum pariatur! Pariatur corrupti quia nobis at rem in distinctio? Nisi temporibus reiciendis, vitae quia quaerat non modi iure voluptatum illo eum quas quam eligendi praesentium. Excepturi atque quos cum sequi iusto earum praesentium quibusdam tempore, molestiae, dignissimos nemo quod deleniti adipisci unde error?</p>
        <button class="page_anchor read_more">read more!</button>
    </div>

    <div class="about">
        <h2 class="section_heading">What we offer</h2>
        <p class="section_paragraph section_paragraph_justified">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint omnis sunt exercitationem consequatur maxime ad quo voluptate, et aliquam odit assumenda qui voluptatem ut dolore dolorem laudantium non dignissimos, sit, autem quae vel suscipit quod. Nemo sapiente laudantium consectetur quos laborum. Soluta, vero! Sed similique exercitationem accusamus commodi consectetur? Soluta quidem architecto incidunt sapiente dolore repellat eveniet, quasi delectus vero nulla odio dolores eaque quisquam. Ut eligendi numquam ratione. Facere mollitia velit voluptatum harum, quo repellat error recusandae neque reiciendis officia numquam eos fuga sint excepturi dignissimos, ullam odio facilis commodi voluptate quas temporibus ipsa id. Voluptatum laudantium eius ratione.</p>
    </div>

    <div class="facilities">
        <h2 class="section_heading">Our Gym Facilities</h2>
        <p class="section_paragraph">A well structured Gym and other exercise facilities</p>
        <div class="gym_images">
            <img src="<?php echo url_for("images/about/gym/gym_1.jpg") ?>" alt="gym image">
            <img src="<?php echo url_for("images/about/gym/gym_2.jpg") ?>" alt="gym image">
        </div>
    </div>

    <div class="facilities">
        <h2 class="section_heading">Our Resort Areas</h2>
        <p class="section_paragraph">Our Resort Areas are simply the best!</p>
        <div class="gym_images">
            <img src="<?php echo url_for("images/about/resort/resort_1.jpg") ?>" alt="resort image">
            <img src="<?php echo url_for("images/about/resort/resort_2.jpg") ?>" alt="resort image">
        </div>
    </div>
</section>

<?php 
    require SHARED_PATH . '/footer.php';
?>