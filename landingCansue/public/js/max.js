function limitWords(textarea, maxWords) {
	let words = textarea.value.split(/\s+/).filter(function (word) {
	  return word.length > 0;
	});
  
	if (words.length > maxWords) {
	  // Truncate the excess words
	  words = words.slice(0, maxWords);
	  textarea.value = words.join(" ");
	}
  
	document.getElementById("wordCount").innerText =
	  words.length + " palabras de " + maxWords + " máximas";
  }