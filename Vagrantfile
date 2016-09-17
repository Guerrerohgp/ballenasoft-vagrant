# -*- mode: ruby -*-
# vi: set ft=ruby :

Vagrant.configure("2") do |config|
    MAINFOLDER = "ballenasoft"
    config.vm.box = "scotch/box"
    config.vm.network "private_network", ip: "192.168.33.26"
    config.vm.hostname = $MAINFOLDER
    config.ssh.username = "vagrant"
    config.ssh.password = "vagrant"
    config.vm.synced_folder ".", "/var/www", :mount_options => ["dmode=777", "fmode=666"]
    # Optional NFS. Make sure to remove other synced_folder line too
    #config.vm.synced_folder ".", "/var/www", :nfs => { :mount_options => ["dmode=777","fmode=666"] }
    #config.vm.synced_folder ".", "/var/www", :nfs => { :mount_options => ["dmode=777","fmode=666", 'vers=3', 'tcp', 'fsc' ,'actimeo=2'] }

    config.vm.provision "shell", inline: <<-SHELL

         ##sudo sed -i s,scotchbox.local,$MAINFOLDER,g /etc/apache2/sites-available/$DOMAIN.conf
         ## Only thing you probably really care about is right here
         #
         ###Domains that need the public folder inside
         DOMAINS=("uniapp.hg")

         ## Loop through all sites
         for ((i=0; i < ${#DOMAINS[@]}; i++)); do
             ## Current Domain
             DOMAIN=${DOMAINS[$i]}

             echo "Creating directory for $DOMAIN..."
             mkdir -p /var/www/$DOMAIN/public

             echo "Creating vhost config for $DOMAIN..."
             sudo cp /etc/apache2/sites-available/scotchbox.local.conf /etc/apache2/sites-available/$DOMAIN.conf

             echo "Updating vhost config for $DOMAIN..."
             sudo sed -i s,scotchbox.local,$DOMAIN,g /etc/apache2/sites-available/$DOMAIN.conf
             sudo sed -i s,/var/www/public,/var/www/$DOMAIN/public,g /etc/apache2/sites-available/$DOMAIN.conf

             echo "Enabling $DOMAIN. Will probably tell you to restart Apache..."
             sudo a2ensite $DOMAIN.conf

             echo "So let's restart apache..."
             sudo service apache2 restart
         done

         ##Domains that does not need the public folder inside
         DOMAINS=("pegaso.dev" "ballenasoft.dev")
         ## Loop through all sites
         for ((i=0; i < ${#DOMAINS[@]}; i++)); do

            ## Current Domain
            DOMAIN=${DOMAINS[$i]}

            echo "Creating directory for $DOMAIN..."
            mkdir -p /var/www/$DOMAIN

            echo "Creating vhost config for $DOMAIN..."
            sudo cp /etc/apache2/sites-available/scotchbox.local.conf /etc/apache2/sites-available/$DOMAIN.conf

            echo "Updating vhost config for $DOMAIN..."
            sudo sed -i s,scotchbox.local,$DOMAIN,g /etc/apache2/sites-available/$DOMAIN.conf
            sudo sed -i s,/var/www/public,/var/www/$DOMAIN,g /etc/apache2/sites-available/$DOMAIN.conf

            echo "Enabling $DOMAIN. Will probably tell you to restart Apache..."
            sudo a2ensite $DOMAIN.conf

            echo "So let's restart apache..."
            sudo service apache2 restart

         done

    SHELL
	# Mailcatcher
    config.vm.provision "shell", inline: "/home/vagrant/.rbenv/shims/mailcatcher --http-ip=0.0.0.0", run: "always"


end
