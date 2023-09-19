<script>
    export let title;
    export let description;
    export let links = []
</script>
<article>
    <h3>{title}</h3>
    <p>{description}</p>
    {#each links as linkItem}
        <a target="_blank" href="{linkItem.url}">{linkItem.name}</a>
    {/each}
</article>
<style>

    article {
        text-decoration: none;
        color: #c2c2c2;
        width: 25%;
        border-radius: .5vw;
        padding: 1vw;
    }

    article > * {
        display: block;
        width: fit-content;
        margin: 1vw 0;
    }

    article p {
        font-size: 1.6vw;
        color: #7d858f;
        margin-bottom: 3vw;
    }

    article a {
        font-size: 1.7vw;
        color: #388bfd;
        text-decoration: none;
        font-weight: bold;
    }


    @media screen and (max-width: 600px) {
        article {
            width: 80%;
        }

        article p,
        article a {
            font-size: 3.5vw;
        }
    }
</style>