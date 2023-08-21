<script>
    import AboutSectionCard from "./AboutSectionCard.svelte";
</script>
<section class="section-about">
    <h2>Explore Kagerou's World</h2>
    <p>A dedicated space for oss hosting</p>
    <a target="_blank" href="https://github.com/elderguardian">Maintainer</a>
    <div>
        <AboutSectionCard
                title="Quick Previews"
                description="Each repository which can be publicly hosted is accessible here, allowing you to quickly test functionality, and user interface before deciding to install it."
        ></AboutSectionCard>
        <AboutSectionCard
                title="Discover Software"
                description="Discovering software made easy. Kagerou serves as a hub hosting instances of diverse open source software projects."
        ></AboutSectionCard>
    </div>
</section>
<style>
    .section-about {
        display: flex;
        justify-content: center;
        flex-direction: column;
        align-items: center;
        background-image: url("/images/planet.png");
        background-size: cover;
        background-position: center;
        width: 100%;
        margin-bottom: 10vw;
    }

    .section-about h2 {
        padding-top: 16vw;
        font-size: 3.5vw;
        color: white;
        font-family: "Inter Semi Bold", "Arial", serif;
    }

    .section-about p,
    .section-about a {
        font-size: 1.8vw;
        text-decoration: none;
    }

    .section-about p {
        margin: 2vw 0;
    }

    .section-about a {
        font-weight: bold;
        color: #c080ff;
    }

    .section-about > div {
        display: flex;
        margin-top: 5vw;
    }

    @media screen and (max-width: 600px) {
        .section-about {
            margin-top: 8vw;
        }

        .section-about h2 {
            margin-top: 5vw;
            font-size: 6vw;
        }

        .section-about p,
        .section-about a {
            font-size: 4vw;
        }

        .section-about div {
            margin-top: 5vw;
            flex-direction: column;
            align-items: center;
        }
    }
</style>