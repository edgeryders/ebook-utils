  # Ebook Utils
  Lets easily extract the content from ftp://sunsite.informatik.rwth-aachen.de/pub/mirror/ibiblio/gutenberg/


  ## Installation

  _Before running the `ebook-utlis.php` make sure php and web server is installed in your system_

  Download and extract the files or clone this repository in your system.



  ## How to start the extraction

  Run the file `ebook-utlis.php` using your browser. e.g.: `http://localhost/ebook-utils-master/ebook-utils.php`.
  Currently `ebook-utils.php` using the `content-input.txt` file which contains Gutenberg text no. to fetch content from
  ftp://sunsite.informatik.rwth-aachen.de/pub/mirror/ibiblio/gutenberg/.

  Edit the `content-input.txt` and place Gutenberg text no. anywhere in the file to process more urls from it.

  Refresh the url above, list of urls will be generated.

  Click the any url which you want fetch content from, after succesful attempt content fetched from url will be saved on the current          directory as  `content-output.txt` and visited url color will appear different.

  If there is any errors while fetching the content from the url, you will be promted to use method 1 or 2 respectively.

  Make sure you use filter feature to remove duplication of items.
