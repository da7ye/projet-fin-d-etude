<x-app-layout>
    {{-- <div>Catalogue.INDEX</div> 
    <div id="viewer" style="width: 100%; height: 1000px;"></div>
    <script type="text/javascript" src="https://cloudpdf.io/viewer.min.js"></script>
    <script>
    const config = { 
        documentId: '09b0ba0a-15d4-437b-baf0-07c534152506',
        // appBarColored: true,
        // themeColor: 'red',
        darkMode: false, 
    };
    CloudPDF(config, document.getElementById('viewer')).then((instance) => {
    });
    </script> --}}

    {{-- option:2 --}}
    <embed src="{{ asset('sample.pdf')}}" width="100%" height="1000">
</x-app-layout>