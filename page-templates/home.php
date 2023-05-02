<?php
/**
 * Template name: Home
 */



get_header(); ?>
<main>
    <section class=" relative h-full w-screen flex flex-col">
        <div class="h-[445px] md:h-[200px] w-full relative bg-white flex">

        </div>
        <div class="relative w-full md:hidden mt-[-1px]">
            <?php include(get_template_directory() . '/public/icons/oval-white-mobile.php'); ?>
        </div>
        <div class="relative w-full hidden md:block">
            <?php include(get_template_directory() . '/public/icons/oval-white.php'); ?>
        </div>
        <div class="absolute z-10 top-1/2 right-0 left-0 w-full transform  -translate-y-1/2  flex">
            <h1
                class="text-40 md:pb-8 leading-46 md:text-60 md:leading-66 text-center mx-auto max-w-[313px] md:max-w-[820px] text-orange font-dela">
                Welkom op de
                <br class="hidden md:block">tijdelijke
                webpagina <br class="hidden md:block"> van We Smile <br class="hidden md:block">
                Tandarts Leiden.
            </h1>
        </div>
    </section>
    <section class="pt-6 mb-5 md:mb-10 container px-[15px] md:max-w-[774px]">
        <h2
            class="text-center mb-[25px] md:mb-4 text-green text-26 leading-32 md:text-36 md:leading-42 font-dela max-w-[310px] mx-auto md:max-w-[774px]">
            Naar de tandarts
            met een glimlach</h2>
        <p
            class="mb-5 text-center text-green text-14 leading-22 md:text-16 md:leading-24 font-sans max-w-[322px] mx-auto md:max-w-[774px]">
            Binnenkort kunt u
            terecht bij We Smile
            Tandarts
            Leiden: de nieuwe
            tandartspraktijk
            in Leiden,
            waar we
            uitstekende mondzorg combineren met een vriendelijke, persoonlijke aanpak.
            <br>
            <br>
            Met ons kleine team van gekwalificeerde, ervaren tandartsen en mondhygiënisten kunnen we bijna niet wachten!
            Maar we moeten nog even geduld hebben, want het pand wordt nog verbouwd. We verwachten dat we u deze zomer
            nog kunnen verwelkomen in onze nieuwe, frisse en gezellige praktijk. U kunt zich wel alvast inschrijven als
            patiënt van We Smile Tandarts Leiden.
        </p>
        <a class="h-[55px] md:h-[65px] px-[25px] md:px-3 flex justify-center items-center w-fit text-white font-dela text-16 leading-18 bg-orange rounded-full mx-auto"
            href="">Naar
            inschrijfformulier</a>
    </section>
    <section class="container md:w-full md:max-w-[990px] grid grid-cols-1 md:grid-cols-2 gap-x-3 gap-y-3  md:gap-y-6">
        <div class="col-span-1 bg-white px-3 md:py-6 md:px-5 py-3  rounded-[10px]">
            <h3 class="mb-[25px] md:mb-3  text-20 leading-26 md:text-26 md:leading-32 font-dela text-green text-center">
                Per wanneer kunt u als
                patiënt terecht
                bij We Smile
                Tandarts
                Leiden?
            </h3>
            <p class="text-14 leading-22 md:text-16 md:leading-24 font-sans font-medium text-green text-center">Vanaf
                augustus 2023. U kunt zich
                wel alvast
                inschrijven via de
                button direct boven deze vraag, dan houden
                we een plek voor u vrij.</p>
        </div>

        <div class="col-span-1 bg-white px-3 md:py-6 md:px-5 py-3  rounded-[10px]">
            <h3 class="mb-[25px] md:mb-3  text-20 leading-26 md:text-26 md:leading-32 font-dela text-green text-center">
                Waar kunt u onze nieuwe
                praktijk
                vinden?
            </h3>
            <p class="text-14 leading-22 md:text-16 md:leading-24 font-sans font-medium text-green text-center">Hoge
                Rijndijk 88 in Leiden,
                (tussen Snackbar Hendo en de Wilhelminabrug).</p>
        </div>

        <div class="col-span-1 bg-white px-3 md:py-6 md:px-5 py-3  rounded-[10px]">
            <h3 class="mb-[25px] md:mb-3  text-20 leading-26 md:text-26 md:leading-32 font-dela text-green text-center">
                Wie kunnen terecht bij We
                Smile
                Tandarts Leiden?
            </h3>
            <p class="text-14 leading-22 md:text-16 md:leading-24 font-sans font-medium text-green text-center">Iedereen
                is welkom bij We Smile.
                Natuurlijk zijn we er voor de inwoners uit de omliggende wijken. Daarnaast hebben we een regiofunctie
                voor het behandelen van angstige kinderen & volwassenen en voor expats die gevestigd zijn in Leiden en
                omgeving. Door onze persoonsgerichte, sensitieve en rustige aanpak voelen ook gespannen patiënten en
                patiëntjes zich vaak snel op hun gemak.</p>
        </div>

        <div class="col-span-1 bg-white px-3 md:py-6 md:px-5 py-3  rounded-[10px]">
            <h3 class="mb-[25px] md:mb-3  text-20 leading-26 md:text-26 md:leading-32 font-dela text-green text-center">
                Wilt u de komende tijd op
                de hoogte
                blijven?
            </h3>
            <p class="text-14 leading-22 md:text-16 md:leading-24 font-sans font-medium text-green text-center">Schrijft
                u zich dan in voor de
                nieuwsbrief. Maximaal eens per maand delen we nieuws, zoals bijvoorbeeld over de lancering van de nieuwe
                website en de openingsdatum van We Smile. Volg ons daarnaast via onze sociale media kanalen voor extra
                nieuws over de verbouwing en meer.</p>
        </div>
        <div class="col-span-1 md:col-span-2 rounded-[10px] pt-2 md:pt-0">
            <a class="h-[55px] md:h-[65px] px-[25px] md:px-3 flex justify-center items-center w-fit text-white font-dela text-16 leading-18 bg-orange rounded-full mx-auto"
                href="">Naar
                inschrijfformulier</a>
        </div>
    </section>
</main>
<?php get_footer(); ?>