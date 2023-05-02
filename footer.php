<?php
/**
 * The template for displaying the footer
 * 
 * @package Day Six theme
 */
?>

<footer class="pt-5 md:pt-10">
    <section class="flex">
        <h5
            class="text-green text-26 font-dela md:mx-auto leading-32 md:text-36 md:leading-32 text-center max-w-[260px] md:max-w-[400px] mx-auto pb-5">
            Tot ziens
            <br>
            in onze praktijk!
        </h5>
    </section>
    <section">
        <img class="w-[240px] h-[240px] rounded-full object-cover mx-auto mb-[-105px] md:mb-[-120px] relative z-10"
            src="/wp-content/themes/wesmile-theme/public/local/profile.jpg" alt="">
        <div class="md:hidden">
            <?php include(get_template_directory() . '/public/icons/oval-green-mobile.php'); ?>
        </div>
        <div class="pb-6 md:pb-0 bg-[#03837A] justify-end md:bg-sand h-[232px] md:h-[335px] relative flex flex-col">
            <div class="hidden md:block h-full  absolute bottom-0 right-0 left-0 w-full">
                <?php include(get_template_directory() . '/public/icons/oval-green-mobile.php'); ?>
            </div>
            <div class="md:mt-auto md:pb-6">
                <p
                    class="text-sand md:text-26 text-20 font-dela font-medium leading-32 md:leading-32 text-center relative z-10">
                    Amir
                    Adel
                    Kleywegt</p>
                <p
                    class="text-sand pt-3 md:text-18 text-14 font-sans font-medium leading-22 md:leading-26 text-center relative z-10">
                    Tandarts
                    en oprichter <br> We Smile Tandarts Leiden</p>
            </div>

        </div>
        </section>
        <section class="bg-[#03837A]">
            <div class="container">
                <div class="md:px-7">
                    <div
                        class="w-full border-y-[1px] md:py-6 py-5 border-sand flex flex-col items-center lg:grid lg:grid-cols-3">
                        <h5
                            class="pb-3 lg:pb-0 text-sand text-26  font-dela mx-auto lg:mx-0  leading-32 text-center lg:text-start max-w-[260px] md:col-span-1">
                            Schrijf je in
                            voor onze
                            nieuwsbrief</h5>
                        <!-- short code gravity form -->
                        <div class="col-span-2 w-full">
                            <?php echo do_shortcode('[gravityform id="1" title="false" description="false" ajax="true"]'); ?>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <section class="bg-[#03837A] pb-[25px] pt-5 md:py-6 md:px-7">
            <div class="container flex flex-col md:grid md:grid-cols-3">
                <div class="md:col-span-1 hidden md:flex">
                    <p
                        class="text-sand  md:text-18 text-14 font-sans font-medium leading-22 md:leading-26 text-center relative z-10">
                        © <?php echo date("Y"); ?>. We Smile Tandarts Leiden</p>
                </div>
                <div class="flex flex-row mx-auto mb-5 md:mb-0 md:col-span-1">
                    <a href="">
                        <?php include(get_template_directory() . '/public/icons/facebook.php'); ?>
                    </a>
                    <a class="mx-[15px]" href="">
                        <?php include(get_template_directory() . '/public/icons/instagram.php'); ?>
                    </a>
                    <a href="">
                        <?php include(get_template_directory() . '/public/icons/linkedin.php'); ?>
                    </a>
                </div>
                <p
                    class="text-sand md:hidden md:text-18 text-14 font-sans font-medium leading-22 md:leading-26 text-center max-w-[250px] mx-auto">
                    ©
                    2023. We Smile
                    Tandarts

                    Leiden
                    Website made by Mistermonki
                </p>
                <div class="md:col-span-1 hidden md:flex">
                    <p
                        class="text-sand md:text-18 text-14 font-sans justify-center font-medium leading-22 md:leading-26 text-end relative z-10 ml-auto">
                        Website made by Mistermonki</p>
                </div>
            </div>
        </section>
</footer>

<?php wp_footer(); ?>
</body>

</html>