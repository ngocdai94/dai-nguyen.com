<?php include "../includes/config.php" ?>
<?php include "../includes/header.php" ?>

<main>  
    <section class="projectPage">
        <h1>IMAGE PROCESSING WITH IoT</h1>
        <p>Undergraduate research assistant to create an image processing project for students.</p>
        
        <div class="project projectDetail">
            <figure>
                <picture>
                    <source type="image/webp" srcset="imgs/under-research-1.webp">
                    <img src="imgs/under-research-1.jpg" alt="undergraduate research">
                </picture>
                <figcaption>1. Research Poster</figcaption>
            </figure>

            <figure>
                <picture>
                    <source type="image/webp" srcset="imgs/under-research-3.webp">
                    <img src="imgs/under-research-3.jpg" alt="thingspeak iot">
                </picture>
                <figcaption>2. ThingSpeak IoT Server</figcaption>
            </figure>

            <figure>
                <picture>
                    <source type="image/webp" srcset="imgs/under-research-2.webp">
                    <img src="imgs/under-research-2.jpg" alt="project for student">
                </picture>
                <figcaption>3. Coin Counter Image Processing</figcaption>
            </figure>
            <br>

            <h2>Overview</h2>
            <p>As a part of my junior year at Seattle University, I researched on image processing algorithms to help my professor, Dr. Shiny Abraham, to design an Internet of Things (IoT) class project for students. The class project that I came up with is a coin counter program, which can capture a snapshot of coins on a table and classify them.</p>

            <h2>How the coin counter works?</h2>
            <p>The image processing of the coin counter is programmed by MatLab. When an image is captured by a webcam connected to a computer, it is processed in four stages. First, the image is converted to gray scale to get a binary image. Then, the binary image is inverted to outline the coins. Next, the inverted image is processed to remove unnecessary detail on the coins. Finally, the coin counter program will count how many coins on the image and classify them to coin currency.</p>

            <h2>What I Did</h2>
            <p>I researched on algorithms and methods which are written in Image Processing Toolbox and Computer Vision Toolbox documentation on MatLab. Then, I designed and tested the coin counter program to make sure the coin counter works. Finally, I wrote a detail project's instruction to guide students on how to program it.</p>
        </div>
    </section>
</main>

<?php include "../includes/footer.php" ?>