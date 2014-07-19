# config valid only for Capistrano 3.2.1
lock '3.2.1'

# Repository name
set :application,   "GeneratorTest.com"
set :domain,        "generatortest.com"
set :deploy_to,     "/var/www/#{fetch(:domain)}/#{fetch(:branch)}"
