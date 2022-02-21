# litlife/book-converter
With this package, you can convert various formats of e-books
## Installation
Use the package manager [composer](https://getcomposer.org/) to install.
```bash
composer require litlife/book-converter
```
For the Calibre driver to work, you need to install [Calibre](https://calibre-ebook.com/download)
```bash
sudo apt install calibre
```
For the Abiword driver to work, you need to install [Abiword](https://www.abisource.com/download/)
```bash
sudo apt install abiword
```
## Usage
### Generate new sitemap and add new url
```bash
use Litlife\BookConverter\BookConverter;

$outputFile = (new BookConverter())
  ->with('calibre')
  ->open(__DIR__ . '/files/test.txt')
  ->convertToFormat('fb2');
  
print_r($outputFile->getFilePath());  
print_r($outputFile->getExtension());
print_r($outputFile->getStream());
```
## Testing
```bash
composer test
```
## License
[MIT](https://choosealicense.com/licenses/mit/)
