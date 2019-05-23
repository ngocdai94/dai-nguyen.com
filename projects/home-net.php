<?php include "../includes/config.php" ?>
<?php include "../includes/header.php" ?>

<main>  
    <section class="projectPage">
        <h1>HOME GIGABIT NETWORK, NAS and SURVEILLANCE SYSTEM</h1>
        <p>Network engineering project to create a fast, secure and reliable home network.</p>
        
        <div class="project projectDetail">
            <figure>
                <picture>
                    <source type="image/webp" srcset="home-net-3.webp">
                    <img src="imgs/home-net-3.jpg" alt="network overview">
                </picture>
                <figcaption>1. Network Deloyment Overview</figcaption>
            </figure>

            <figure>
                <picture>
                    <source type="image/webp" srcset="home-net-1.webp">
                    <img src="imgs/home-net-1.jpg" alt="cable managment">
                </picture>
                <figcaption>2. Cable Managment</figcaption>
            </figure>

            <figure>
                <picture>
                    <source type="image/webp" srcset="home-net-2.webp">
                    <img src="imgs/home-net-2.jpg" alt="data center">
                </picture>
                <figcaption>3. Data Center</figcaption>
            </figure>
            <br>

            <h2>Overview</h2>
            <p>As part of personal enrichment in computer networking, I designed and built a Gigabit Home Internet network with a Network Attached Storage (NAS) server, Surveillance System, and strong Wi-Fi converage in a request of a client.</p>
            <p>To meet the client's expectations, below are the list of devices I used in this project:</p>
            <ol>
                <li>Networking Devices:</li>
                <ul>
                    <li>Unifi Security Gateway</li>
                    <li>Unifi PoE Switch 48-Port</li>
                    <li>Unifi Cloud Key</li>
                    <li>Unifi AC AP Pro</li>
                    <li>Unifi G3 Power Over Ethernet (PoE) Camera</li>
                </ul><br>

                <li>NAS Server (Kakarot Data Center Server) Specifications:</li>
                <ul>
                    <li><strong>Processor</strong>
                        <ul>
                            <li>Intel Xeon E3 v6, 3.8Ghz. (4 cores, 8 threads)</li>
                        </ul>
                    </li>
                    <li><strong>Memory</strong>
                        <ul>
                            <li>32GB DDR4 ECC RAM</li>
                        </ul>  
                    </li>

                    <li><strong>Storage</strong>
                        <ul>
                            <li>2TB SSD cache storage</li>
                            <li>3x 6TB HDD SATA3</li>
                        </ul>  
                    </li>
                    <li><strong>Operating System</strong>
                        <ul>
                            <li>unRaid OS</li>
                        </ul>
                    </li>
                    <li><strong>Server Motherboard</strong>
                        <ul>
                            <li>Supermicro (X11SSH-CTF) with Supermicro Chassis 8x hot-swap HDD/SAS.</li>
                        </ul>
                    </li>
                </ul>
            </ol>

            <h2>How the whole system works?</h2>
            <p>The Figure 1 above shows how the whole system is connected. All the networking devices are connected by CAT6 ethernet cables to ensure no crosstalk and interference among the cables. In addition, the system is connected to a battery backup to protect it from the power outage.</p>

            <h2>What I Did</h2>
            <p>Installation, setup, and secure the system are my three main tasks. For the installation, I organized, wired and crimped all the ethernet cables to put them in a patch panel and a network rack. I also installed wireless access point and PoE cameras to the ceiling and the wall.</p>

            <p>Beside the installation, I did the setup and configuration for the unRaid OS as a NAS server on Kakaroto Server. The Kakaroto Server also runs Ubuntu virtual machines to host a nginx web server and a Unifi Camera OS.</p>

            <p>Lastly, I secured the network by creating 3 seperate Wi-Fi networks, which are home, guest, and IoT. Each of the network is ruled by a firewall to prevent malicous packets coming to each other.</p>
        </div>
    </section>
</main>

<?php include "../includes/footer.php" ?>