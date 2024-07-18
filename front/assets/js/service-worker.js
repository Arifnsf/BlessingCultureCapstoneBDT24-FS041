// service-worker.js

const CACHE_NAME = 'blessing-culture-v1';
const urlsToCache = [
  '/',
  '/index.php',
  '/front/login.php',
  '/front/assets/css/bootstrap.min.css',
  '/front/assets/css/lineicons.css',
  '/front/assets/style.css',
  '/front/assets/images/logoBC.png',
  '/front/assets/images/wayang.jpg',
  '/front/assets/wonderland.mp3',
  '/front/assets/js/bootstrap.bundle.min.js',
  '/front/assets/js/main.js'
];

self.addEventListener('install', event => {
  event.waitUntil(
    caches.open(CACHE_NAME)
      .then(cache => cache.addAll(urlsToCache))
  );
});

self.addEventListener('fetch', event => {
  event.respondWith(
    caches.match(event.request)
      .then(response => {
        // Cache hit - return response
        if (response) {
          return response;
        }

        // Clone the request because request is a stream and can be consumed only once
        const fetchRequest = event.request.clone();

        return fetch(fetchRequest)
          .then(response => {
            // Check if we received a valid response
            if (!response || response.status !== 200 || response.type !== 'basic') {
              return response;
            }

            // Clone the response because response is a stream and can be consumed only once
            const responseToCache = response.clone();

            caches.open(CACHE_NAME)
              .then(cache => {
                cache.put(event.request, responseToCache);
              });

            return response;
          })
          .catch(() => {
            // Return a fallback response if fetch fails
            return caches.match('../index.php'); // Replace with your offline page
          });
      })
  );
});
