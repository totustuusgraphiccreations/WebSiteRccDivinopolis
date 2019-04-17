function PDF24Doc(){
/*
* Create a document with parameters
*/
var doc = new PDF24Doc({
	charset : "UTF-8",
	headline : "This ist the headline",
	headlineUrl : "http://www.pdf24.org",
	baseUrl : "http://www.pdf24.org",
	filename : "test",
	pageSize : "210x297"
	emailTo : "stefanz@pdf24.org",
	emailFrom : "stefanz@pdf24.org",
	emailSubject: "Here is your created PDF files",
	emailBody: "The created PDF file is attached to this email. Regards www.pdf24.org!"
	emailBodyType: "text"
});

/*
* Add an element without using PDF24Element
*/
doc.addElement({
	title : "This is a title",
	url : "http://www.pdf24.org",
	author : "Stefan Ziegler",
	dateTime : "2010-04-15 8:00",
	body : "THis is the content of the element"
});

/*
* Create the PDF file
*/
doc.create();
}