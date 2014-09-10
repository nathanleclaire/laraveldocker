## laraveldocker (Lightning Fast)

![deploy on push](/images/deploy-on-push.gif)

This is a proof of concept application which uses [fig](https://fig.sh) to set
 up a quick easy deploy on git push with the flexibility of using arbitrary
[docker](https://github.com/docker/docker) containers, and how quickly a local
development environment (even with non-trivial dependencies such as 
`beanstalkd`) can be bootstrapped which is very similar to production.

To set up:

### Locally

1. Make sure `fig` and `docker` are installed.
2. Run `fig up` in the top level directory to view the app.  The app will
   automatically run migrations, seed the database etc. on container start.
3. Visit `localhost:8000` (or `boot2docker:8000`) in your browser.

### Deploy

1. Spin up a new VPS, user, etc.
2. Install `fig` and `docker`.
3. Run the following commands on the server:

```
$ cd
$ mkdir laraveldocker
$ mkdir laraveldocker_deploy
$ cd laraveldocker
$ git init --bare
$ wget https://raw.githubusercontent.com/nathanleclaire/laraveldocker/master/hooks/post-receive -O hooks/post-receive
$ chmod +x hooks/post-receive
```

4. Great, now you just have to run some commands on the client (your laptop 
   etc.) to set up deploy-on-push.  First, clone the repo and add the new server 
   as a remote:

```
$ git clone https://github.com/nathanleclaire/laraveldocker
$ cd laraveldocker
$ git remote add prod user@vpsIpAddress:laraveldocker
$ git push prod master
```

The first time this push runs, it will take some time, as the VPS needs to 
download and build the dependencies it needs to run the application.  On 
subsequent pushes everything will go much faster.

That's it!  Now you should be able to go to `vpsIpAddress` and see the 
application running.

![app](/images/lightning.png)
