import Tesseract from 'tesseract.js';

const imagePath = process.argv[2];

Tesseract.recognize(
    imagePath,
    'eng',
    { logger: m => {
            if (m.status === 'recognizing text' && m.progress === 1) {
                // Only log when the text recognition is complete
            }
        }}
).then(({ data: { text } }) => {
    console.log(text.trim()); // Output only the recognized text
}).catch(err => {
    console.error('Error:', err);
});
