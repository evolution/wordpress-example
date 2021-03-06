Vagrant.configure("2") do |config|
  # Configuring the hostmanager to automatically alter the hosts file for development testing
  config.hostmanager.enabled            = true
  config.hostmanager.include_offline    = true
  config.hostmanager.ignore_private_ip  = false
  config.hostmanager.manage_host        = true

  # Every Vagrant virtual environment requires a box to build off of.
  config.vm.box         = "ubuntu/trusty64"

  # Borrowed from: https://stefanwrobel.com/how-to-make-vagrant-performance-not-suck
  config.vm.provider :virtualbox do |vb|
    host = RbConfig::CONFIG['host_os']
    mem_divisor = 4 # Allocate 1/4 host memory

    if host =~ /darwin|bsd/
      cpus = `sysctl -n hw.ncpu`.to_i
      mem = `sysctl -n hw.memsize`.to_i / 1024 / 1024 / mem_divisor
    elsif host =~ /linux/
      cpus = `nproc`.to_i
      mem = `grep 'MemTotal' /proc/meminfo | sed -e 's/MemTotal://' -e 's/ kB//'`.to_i / 1024 / mem_divisor
    elsif host =~ /mswin|mingw/
      cpus = `WMIC CPU Get NumberOfLogicalProcessors /Value`.strip.split('=')[1].to_i
      mem = `WMIC ComputerSystem Get TotalPhysicalMemory /Value`.strip.split('=')[1].to_i / 1024 / 1024 / mem_divisor
    else
      cpus = 1
      mem = 1024
    end

    vb.customize ["modifyvm", :id, "--memory", mem]
    vb.customize ["modifyvm", :id, "--cpus", cpus]
    vb.customize ["modifyvm", :id, "--natdnshostresolver1", "on"]
  end

  config.vm.define :local do |box|
    box.vm.hostname = "local.example.com"

    # Additional host names for testing
    box.hostmanager.aliases = ["example.com", "production.example.com", "www.example.com"]

    # Static IP for testing.
    box.vm.network :private_network, ip: "192.168.137.137"
    box.vm.network :forwarded_port, guest: 22, id: 'ssh', host: 7137, auto_correct: true

    # Mount library for testing
    box.vm.synced_folder "../", "/wordpress", :nfs => true

    # Remount the default shared folder as NFS for caching and speed
    box.vm.synced_folder ".", "/vagrant", :nfs => true

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
