<section id="section-discover">
    <h2 class="text-blue-to-red">Discover Awesome Creations</h2>
    <div>
        <article>
            <h3>img2minecraft</h3>
            <p>Convert image files into Minecraft blocks, maintaining the original color and look of the
                picture.</p>
            <a target="_blank" href="https://github.com/elderguardian/img2minecraft">repository</a>
            <a target="_blank" href="https://img2minecraft.kagerou.dev/">instance</a>
        </article>
        <article>
            <h3>monkeyshot</h3>
            <p>Server software for uploading images and displaying them with a pretty embed. Based on the Strawberry
                Framework.</p>
            <a target="_blank" href="https://github.com/elderguardian/monkeyshot">repository</a>
        </article>
        <article>
            <h3>flaggen</h3>
            <p>A website for generating profile pictures which include country flags</p>
            <a target="_blank" href="https://github.com/elderguardian/flaggen">repository</a>
            <a target="_blank" href="https://flaggen.kagerou.dev/">instance</a>
        </article>
        <article>
            <h3>ton</h3>
            <p>A lightweight and classless CSS Framework, created to make creating static websites easier. </p>
            <a target="_blank" href="https://github.com/elderguardian/ton">repository</a>
            <a target="_blank" href="https://ton.kagerou.dev/">preview</a>
        </article>
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

    #section-discover article {
        text-decoration: none;
        color: #c2c2c2;
        width: 25%;
        border-radius: .5vw;
        padding: 1vw;
    }

    #section-discover article > * {
        display: block;
        width: fit-content;
        margin: 1vw 0;
    }

    #section-discover h3 {
        font-size: 2vw;
        color: white;
        font-family: "Inter Semi Bold", "Arial", serif;
    }

    #section-discover article p {
        font-size: 1.6vw;
        color: #7d858f;
        margin-bottom: 3vw;
    }

    #section-discover article a {
        font-size: 1.7vw;
        color: #388bfd;
        text-decoration: none;
        font-weight: bold;
    }

    @media screen and (max-width: 600px) {
        #section-discover h2 {
            font-size: 5vw;
        }

        #section-discover div {
            flex-direction: column;
        }

        #section-discover div article {
            width: 80%;
        }

        #section-discover h3 {
            font-size: 3.5vw;
        }

        #section-discover article p,
        #section-discover article a {
            font-size: 3.5vw;
        }
    }
</style>