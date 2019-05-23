<?php include "../includes/config.php" ?>
<?php include "../includes/header.php" ?>

<main>  
    <section class="projectPage">
        <h1>TRACTOR/TRAILER COMMUNICATION PHASE II</h1>
        <p>Engineering project sponsored by PACCAR to create a communication system between a truck's dashboard display and its trailer to collect sensor data.</p>
        
        <p><a href="https://www.seattleu.edu/scieng/project-center/news/tractor-trailer-communication-at-paccar-itd.html" target="_blank" rel="noopener">(Project News from Seattle University)</a></p>

        <div class="project projectDetail">
            <figure>
                <picture>
                    <source type="image/webp" srcset="imgs/senior-design-1.webp">
                    <img src="imgs/senior-design-1.jpg" alt="project poster">
                </picture>
                <figcaption>1. Project Poster</figcaption>
            </figure>

            <figure>
                <picture>
                    <source type="image/webp" srcset="imgs/senior-design-2.webp">
                    <img src="imgs/senior-design-2.jpg" alt="raspberry pi as a data hub">
                </picture>
                <figcaption>2. Raspberry as a Datahub to Collect XBee Sensors' Data</figcaption>
            </figure>

            <figure>
                <picture>
                    <source type="image/webp" srcset="imgs/senior-design-3.webp">
                    <img src="imgs/senior-design-3.jpg" alt="temp and door sensor">
                </picture>
                <figcaption>3. Temperature and Door Sensors</figcaption>
            </figure>

            <figure>
                <picture>
                    <source type="image/webp" srcset="imgs/senior-design-4.webp">
                    <img src="imgs/senior-design-4.jpg" alt="android tablet">
                </picture>
                <figcaption>4. Android Tablet Shows XBees' Current Data</figcaption>
            </figure>

            <figure>
                <div class="iframe-container">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/gravbCuW62k" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                
                <figcaption>5. PACCAR TEAM 17.6 - Project Video Presentation</figcaption>
            </figure>
            <br>

            <h2>Overview</h2>
            <p>As a part of my senior year in electrical and computer engineering program, I worked in a team of seven people including my liason, Mr. Jerry Ross, and faculty advisor, Dr. Shiny Abraham, to work on a communication system for a truck and its trailer so that it can collect sensor data from the trailer and send those data to an Android tablet. The goal of this project is to enhance the truck's safeness while operating on the road by letting the driver knows the status of the truck's trailer.</p>

            <h2>How the communication works?</h2>
            <p>Raspberry Pi 3, which is our Data Hub, is an essential device to get data from XBees' sensor and send it to an Android tablet via the Bluetooth connection. In addition, one of the XBee module will connect directly to the Data Hub through an USB cable, and it is configured as the master, where other XBee modules are configured as slaves. These Xbee modules create a mesh network to wirelessly transfering data to the Data Hub.</p>
            <p>When the Data Hub receives the sensor data, it will store it in the SQLite database to keep a history. Then, the sensor data will be sent to the Android tablet.</p>

            <h2>What I Did</h2>
            <p>I worked on the temperature sensor and door sensor for this project. For the temperature sensor, it is connected to an Arduino Fio programmable board, where one of the slaved XBee module is inserted on the board. The Arduino Fio board is powered by a battery and programmed in C to collect and send the temperture sensor data to the Data Hub every 5 seconds. Simmilarly, the door sensor is connected to a programmable board, which is XBee explorer, and programmed in C to collect and send sensor data to the Data Hub.</p>
            <p>Beside the temperature and door sensor, I also helped the team writting Python scripts for the Data Hub and designing the Android application layout.</p>
        </div>
    </section>
</main>

<?php include "../includes/footer.php" ?>