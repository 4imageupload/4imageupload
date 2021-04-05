imageGalleryId: 'iu-gallery',
sendRequestToServer: true,
saveImageRoute : '{{ route('save-image') }}',
saveImageOrderRoute : '{{ route('save-image-order') }}',
deleteImageRoute : '{{ route('delete-image') }}',
selectOrder: true,
customSelect: true,
showUploadingProgress: true,
maxImageColumn: 6,
minImageColumn: 3,
minImageWidth: 150,
headers: {'X-CSRF-TOKEN': document.getElementById('csrf_token').getAttribute('content')},
imageBelongsTo: {'token' : makeid(10)},
addLogo: ["/demo-image/logo.png", , , 'center'],
