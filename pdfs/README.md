# PDF Files for Talks and Presentations

This folder contains PDF files for presentations, talks and demos hosted on the Send Ventures website.

## How to Add a New PDF

1. **Add your PDF file** to this directory
2. **Update** `talks-presentations.html` with a new entry following this template:

```html
<div class="border-l-4 border-purple-500 pl-5 py-4 bg-gradient-to-r from-purple-50 to-white rounded-r-lg hover:shadow-md transition">
    <h3 class="text-lg font-bold text-gray-900 mb-2">
        <a href="pdfs/your-file-name.pdf" class="text-purple-700 hover:text-purple-900 underline transition" target="_blank" rel="noopener">
            Your Presentation Title
        </a>
    </h3>
    <p class="text-gray-700 text-sm mb-2">Brief description of the presentation.</p>
    <div class="flex items-center gap-4 text-xs text-gray-500">
        <span class="font-semibold">Date: Month Year</span>
        <span>•</span>
        <span>Event Name</span>
        <span>•</span>
        <a href="pdfs/your-file-name.pdf" class="text-purple-600 hover:text-purple-800 font-semibold" download>Download PDF</a>
    </div>
</div>
```

3. **Commit and push** to GitHub:
```bash
git add pdfs/your-file-name.pdf talks-presentations.html
git commit -m "Add new presentation: Your Title"
git push
```

## GitHub Pages PDF Hosting

GitHub Pages fully supports hosting PDF files. Users can:
- **View PDFs** directly in the browser (opens in new tab with `target="_blank"`)
- **Download PDFs** using the download link
- **Share direct links** to PDFs

No special configuration needed - just commit your PDFs and they'll be served automatically!
