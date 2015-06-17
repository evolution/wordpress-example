Vagrant.configure("2") do |config|
  # Configuring the hostmanager to automatically alter the hosts file for development testing
  config.hostmanager.enabled            = true
  config.hostmanager.include_offline    = true
  config.hostmanager.ignore_private_ip  = false
  config.hostmanager.manage_host        = true

  # Every Vagrant virtual environment requires a box to build off of.
  config.vm.box         = "ubuntu/trusty64"
  config.ssh.insert_key = false

  # Configure 1GB (1024MB) of memory
  config.vm.provider :virtualbox do |vb|
    vb.customize ["modifyvm", :id, "--memory", 1024]
    vb.customize ["modifyvm", :id, "--natdnshostresolver1", "on"]
  end

  config.vm.define :local do |box|
    box.vm.hostname = "local.example.com"

    # Additional host names for testing
    box.hostmanager.aliases = ["example.com", "production.example.com", "www.example.com"]

    # Static IP for testing.
    box.vm.network :private_network, ip: "192.168.137.137"
    box.vm.network :forwarded_port, guest: 22, id: 'ssh', host: 7137, auto_correct: true

    box.ssh.forward_agent = true

    # Mount library for testing
    box.vm.synced_folder "../", "/wordpress", :nfs => true

    # Remount the default shared folder as NFS for caching and speed
    box.vm.synced_folder ".", "/vagrant", :nfs => true

    # Mount local SSH keys for deployments
    box.vm.synced_folder "~/.ssh", "/home/vagrant/.ssh"

    # Provision local.example.com
    box.vm.provision :ansible do |ansible|
      ansible.playbook = "lib/ansible/provision.yml"
      ansible.inventory_path = "lib/ansible/hosts"
      ansible.limit = "local"
      ansible.extra_vars = { stage: "local" }
    end
  end

  # Update IPs
  config.vm.provision :hostmanager
end
