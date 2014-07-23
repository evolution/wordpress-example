# config valid only for Capistrano 3.2.1
lock '3.2.1'

# Repository name
set :application,   "Example.com"
set :domain,        "example.com"
set :deploy_to,     "/var/www/#{fetch(:domain)}/#{fetch(:stage)}/#{fetch(:branch)}"

# Added for testing purposes
set :repo_url,      "https://github.com/evolution/wordpress-example.git"
