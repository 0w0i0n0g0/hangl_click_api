<div align="center">

# han.gl statistics to SVG

<p align="center">
  <img src="./img/logo.png" width="200"/>
</p>

By_0w0i0n0g0

<br>
<br>

## Table of Contents

[Notification](#notification)

[How to use](#how-to-use)

[Usage](#usage)

[Caution](#caution)

[Etc](#etc)

</div>

<br>
<br>

## Notification

- __This project has been archived, so there are no more demo Heroku servers in operation. If you want, you can download the code and host the PHP yourself. Thank you.__

- This api returns the click counts of the link shortener "han.gl" in the form of SVG.

- If you want to use link shortener for this, go to : https://han.gl/


<br>
<br>

## How to use

1. Go to the site where you check the statistics by attaching + to the shortcut link that you made with han.gl.

    - EX) If you created https://han.gl/xt1zo, then the statistics link is : https://han.gl/xt1zo+

And then you will get link like this : https://han.gl/24663/stats

---

2. Then make your SVG link here!

  - https://hangl-statistics-to-svg.herokuapp.com/makeUrl.php

<p align="center">
  <img src="./img/1.png" width="300"/>
</p>

---

__PLEASE__ make sure that the link you put in to the SVG url maker should contain https:// or http://.

  - EX) The created SVG url looks like : https://server.com/?url=https://han.gl/24663/stats

  - NOT : https://server.com/?url=han.gl/24663/stats

<br>
<br>

## Usage
You can use it in README.md or every other site like this :

- Example 1

```
![SVG](https://hangl-statistics-to-svg.herokuapp.com/?url=https://han.gl/934395/stats&url2=https://han.gl/990234/stats&url3=)
```

![SVG](https://hangl-statistics-to-svg.herokuapp.com/?url=https://han.gl/934395/stats&url2=https://han.gl/990234/stats&url3=)


- Example 2

```
<p align="center">
  <img src="https://hangl-statistics-to-svg.herokuapp.com/?url=https://han.gl/934395/stats&url2=https://han.gl/990234/stats&url3="/>
</p>
```

<p align="center">
  <img src="https://hangl-statistics-to-svg.herokuapp.com/?url=https://han.gl/934395/stats&url2=https://han.gl/990234/stats&url3="/>
</p>

- Reference

<p align="center">
  <img src="./img/example.png"/>
</p>

Used to display the number of downloads.

<br>
<br>

## Caution

This service is created for the convenience of service users, without any interaction with han.gl.

<br>
<br>

## Etc

<br>

### Roadmap

- [X] Run the demo server.
- [X] Supports for multiple links.
- [X] Run directly with han.gl stats link.
- [X] Provide url Maker for easy use.

<br>

### Version

- v.0
  - Only one link is supported.
  - Can't use it in GitHub README.md because JavaScript is used.

- v.1
  - Multiple links are supported.
  - You can use it in GitHub README.md because now, it is returning the pure svg.

- v.2
  - Now it can get parameters directly with han.gl stats link.
  - Create svg link easily with SVG url maker.
  - If there is no url parameters, it redirects to SVG url maker.
