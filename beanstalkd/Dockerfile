from ubuntu:14.04

run apt-get update && apt-get install -y beanstalkd
volume ["/beanstore"]
cmd ["beanstalkd", "-b", "/beanstore"]