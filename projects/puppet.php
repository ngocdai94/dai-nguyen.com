<?php include "../includes/config.php" ?>
<?php include "../includes/header.php" ?>

<main>  
    <section class="projectPage">
        <h1>AUTOMATED DANCING PUPPET</h1>
        <p>Engineering lab project using hardware and software to control a puppet</p>
        
        <div class="project projectDetail">
            <figure>
                <img src="imgs/puppet-1.webp" alt="puppet prototype">
                <figcaption>1. Puppet Prototype Setup</figcaption>
            </figure>

            <figure>
                <img src="imgs/puppet-2.webp" alt="puppet...">
                <figcaption>2. Puppet Prototype Testing on PCB</figcaption>
            </figure>

            <figure>
                <div class="iframe-container">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/x64lUKmZiDc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                
                <figcaption>3. Puppet Demonstration</figcaption>
            </figure>
            <br>

            <h2>Overview</h2>
            <p>As a part of my junior year electrical and computer engineering labs, I worked with a lab partner to implement a marionette puppet that performed a dance routine on command.</p>

            <h2>How the Puppet Worked?</h2>
            <p>The puppet's movements were controlled by circuits with four motors and programmed in C on a Raspberry Pi. The motors are connected with optical encoder allowed us to control the puppet's limbs, which included moving each limb up or down by a set amount.</p>

            <h2>What We Did</h2>
            <p>Though the lab instructors had designed both the hardware and software, my lab partner and I were responsible for the construction, testing, and troubleshooting of the puppet. We had to read schematics, build and test the circuits, solder a printed circuit board (PCB), modify code to control the puppet's movements, and integrate the hardware and software.
            </p>
            <p>I focused mainly on the software side of the project and worked together with my partner on other areas on the projects, including the troubleshooting and testing aspects.</p>
        </div>
    </section>
</main>

<?php include "../includes/footer.php" ?>