let str = 'abcde';
let search = 'a'
if (str.toLocaleLowerCase().startsWith(search.toLocaleLowerCase())) {
   console.log('yes');
} else console.log('no');