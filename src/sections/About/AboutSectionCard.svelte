<script>
    export let title;
    export let description;
</script>
<article class="about-section-card">
    <h3>{title}</h3>
    <p>{description}</p>
</article>
<style>
    .about-section-card {
        width: 50%;
        margin: 0 2vw;
        padding: 4vw 2vw 1vw;
        background: rgba(121, 121, 121, 0.2);
        border-radius: .5vw;
    }

    .about-section-card h3 {
        font-size: 2vw;
        color: white;
    }

    .about-section-card p {
        font-size: 1.7vw;
        margin: 2vw 0;
    }

    @media screen and (max-width: 600px) {
        .about-section-card h3 {
            font-size: 4vw;
        }

        .about-section-card p {
            font-size: 3.5vw;
        }

        .about-section-card {
            padding: 6vw 3vw 2vw;
            width: 90%;
            margin: 2vw;
        }
    }
</style>