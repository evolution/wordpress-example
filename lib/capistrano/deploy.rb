# config valid only for Capistrano 3.2.1
lock '3.2.1'

# Infer branch (unless specified via env var) from current repo
if ENV.has_key?('branch')
  set :branch, ENV['branch']
else
  matches = proc { `git branch`.match(/\* (\S+)\s/m) }
  set :branch, (matches.call ? matches.call[1] : "master")
end

# Repository name
set :application,   "Example.com"
set :domain,        "example.com"
set :deploy_to,     "/var/www/#{fetch(:domain)}/#{fetch(:stage)}/#{fetch(:branch)}"
set :linked_dirs,   %w{web/wp-content/uploads}
set :wp_path,       "#{release_path}/web/wp"

namespace :deploy do
  after :updated, :bower_install do
    on roles(:web) do
      execute "cd #{release_path} && bower install --config.interactive=false"
    end
  end
  after :finished, :launch_browser do
    require 'launchy'
    uri = "http://#{fetch(:stage)}.#{fetch(:domain)}/"
    Launchy.open(uri) do |exception|
      puts "Failed to open #{uri} because #{exception}"
    end
  end
end

# Added for testing purposes
set :repo_url,      "https://github.com/evolution/wordpress-example.git"
