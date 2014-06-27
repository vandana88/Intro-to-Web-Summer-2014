

var wonders = [
	{title:  'Great Pyramid of Giza', img:'http://upload.wikimedia.org/wikipedia/commons/thumb/e/e3/Kheops-Pyramid.jpg/1024px-Kheops-Pyramid.jpg', description:  'one of the 7 wonders'},
	{title:  'Hanging Gardens of Babylon', img:  'http://upload.wikimedia.org/wikipedia/commons/a/ae/Hanging_Gardens_of_Babylon.jpg', description: 'xxxx'},
	{title:'Temple of Artemis', img: 'http://upload.wikimedia.org/wikipedia/commons/thumb/1/1d/Miniaturk_009.jpg/300px-Miniaturk_009.jpg', description: 'xxxx'},
	{title:'Statue of Zeus at Olympia', img: 'http://upload.wikimedia.org/wikipedia/commons/c/c6/Statue_of_Zeus.jpg', description: 'xxxx'}, 
	{title:'Mausoleum at Halicarnassus', img: 'http://upload.wikimedia.org/wikipedia/commons/thumb/d/d5/Mausoleum_of_Halicarnassus_2009.jpg/1024px-Mausoleum_of_Halicarnassus_2009.jpg', description: 'xxxx' }, 
	{title:'Colossus of Rhodes', img:  'http://upload.wikimedia.org/wikipedia/commons/thumb/5/5f/Colosse_de_Rhodes_%28Barclay%29.jpg/170px-Colosse_de_Rhodes_%28Barclay%29.jpg', description: 'xxxx'}, 
	{title:'Lighthouse of Alexandria', img:  'http://upload.wikimedia.org/wikipedia/commons/thumb/2/2e/Lighthouse_-_Thiersch.gif/220px-Lighthouse_-_Thiersch.gif', description: 'xxxx'}, 
]; 




wonders.forEach(function(wonder) {
document.body.innerHTML += '<h2>' + wonder.title + '</h2>'
							+ '<img src="' + wonder.img + '" >'
							+ '<p>' + wonder.description + '</p>'

; 

});






