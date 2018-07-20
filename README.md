# Ebook Utils
  
A collection of utilities to manage digital texts. Overview:
  
* `gutenberg-info.php`: Lets you easily extract metadata information of Project Gutenberg works. Currently this includes the work's URL on any mirror server of your choice, and the work's publication date.


## 1. Installation

1. Make sure PHP and a web server is installed in your system.

2. Download and extract the files of this repository, or clone this repository to your system.


## 2. Using gutenberg-info.php

1. Adapt the file `gutenberg-info.php` to specify the source where to fetch the works from. Currently, the default is a German mirror server, with the base URL `ftp://sunsite.informatik.rwth-aachen.de/pub/mirror/ibiblio/gutenberg/`.

2. Adapt the input file. Currently, the script uses the `content-input.txt` file for its input. It contains Project Gutenberg text numbers about which you want to get metadata information. Edit the file and add / replace Gutenberg text numbers according to your use case. They can appear anywhere in the file.

3. Run the script `gutenberg-info.php` by opening it in your browser, e.g. by visiting `http://localhost/ebook-utils-master/ebook-utils.php`. 

4. A list of URLs will be generated for you. Click any url of which you want fetch metadata information.

5. After succesful attempt of fetching the metadata about this work, this metadata will be added to the output file (`content-output.txt` in the current directory) and the URL color will appear different because you "visited" it.

6. If there are any errors while fetching the content from the URL, you will be promted to use one of two methods to fix it (method 1 or 2, respectively).

There is a filter feature which you can use to remove duplications of items.

Found bugs or want to add more features? feel free to open issues or pull request here. :-)
