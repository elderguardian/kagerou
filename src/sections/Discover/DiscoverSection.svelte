<script>
    import DiscoverSectionCard from "./DiscoverSectionCard.svelte";
</script>

<section id="section-discover">
    <h2 class="text-blue-to-red">Discover Awesome Creations</h2>
    <div>
        <DiscoverSectionCard
                title="img2minecraft"
                description="Convert image files into Minecraft blocks, maintaining the original color and look of the picture."
                links={[{ name: "repository", url: "https://github.com/elderguardian/img2minecraft", },
                    { name: "instance", url: "https://img2minecraft.kagerou.dev/", }]}
        ></DiscoverSectionCard>
    </div>
</section>
<style>
    #section-discover {
        margin: 2vw 1vw 5vw;
    }

    #section-discover h2 {
        font-size: 2.5vw;
        color: white;
        font-family: "Inter Semi Bold", "Arial", serif;
    }

    #section-discover div {
        display: flex;
        text-align: left;
        margin-top: 2vw;
    }

    @media screen and (max-width: 600px) {
        #section-discover h2 {
            font-size: 5vw;
        }

        #section-discover div {
            flex-direction: column;
        }

        #section-discover h3 {
            font-size: 3.5vw;
        }
    }
</style>