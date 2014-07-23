server 'local.example.com',
  roles:        %w{db web},
  user:         fetch(:user),
  ssh_options:  fetch(:ssh_options)

set :release_path, "/vagrant"
