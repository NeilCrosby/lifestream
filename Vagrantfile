box      = 'precise64'
url      = 'http://files.vagrantup.com/precise64.box'
hostname = `pwd | sed 's#^/##' | sed 's#/#-#g' | tr -d '\n'`
domain   = '10in3.dev'
ip       = '192.168.0.43'
ram      = '256'

Vagrant.configure("2") do |config|
    config.vm.box = box
	config.vm.box_url = url
    config.vm.hostname = hostname + '.' + domain
    config.vm.network :private_network, ip: ip

    config.vm.provider "virtualbox" do |v|
	    v.name = hostname
	    v.memory = ram
    end

    $script = <<SCRIPT
# Directory in which librarian-puppet should manage its modules directory
PUPPET_DIR='/vagrant/puppet'

# NB: librarian-puppet might need git installed. If it is not already installed
# in your basebox, this will manually install it at this point using apt or yum
GIT=/usr/bin/git
APT_GET=/usr/bin/apt-get
YUM=/usr/sbin/yum
if [ ! -x $GIT ]; then
    if [ -x $YUM ]; then
        yum -q -y install git-core
    elif [ -x $APT_GET ]; then
        apt-get -q -y install git-core
    else
        echo "No package installer available. You may need to install git manually."
    fi
fi

if [ `gem query --local | grep librarian-puppet | wc -l` -eq 0 ]; then
  gem install librarian-puppet
  cd $PUPPET_DIR && librarian-puppet install --clean
else
  cd $PUPPET_DIR && librarian-puppet update
fi
SCRIPT

    config.vm.provision :shell do |shell|
        shell.inline = $script
    end

#    config.vm.provision :shell do |shell|
#      shell.inline = "mkdir -p /etc/puppet/modules;
#                      #gem install librarian-puppet;
#                      #librarian-puppet init
#                      #puppet module install --force rafaelfc/pear;
#                      #pear config-set auto_discover 1;
#                      #pear install --force pear.phpunit.de/PHPUnit;"
#    end

    config.vm.provision :puppet do |puppet|
        puppet.options = "-v"
        puppet.manifests_path = "puppet/manifests"
        puppet.manifest_file  = "site.pp"
        puppet.module_path = "puppet/modules"
    end
end
