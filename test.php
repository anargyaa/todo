<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sidebar</title>
  <!-- Include Tailwind CSS -->
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="font-sans">

<div class="flex">
  <div id="sidebar" class="bg-black text-white w-56 min-h-screen transition-all duration-500">
    <ul>
      <li>a</li>
      <li>a</li>
      <li>a</li>
    </ul>
    <button id="toggleSidebar" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-4">
      Toggle Sidebar
    </button>
  </div>
  <div class="bg-red-400 flex-1 max-h-screen grow overflow-auto">
    <div class="flex flex-col gap-4">
      <div class="w-10 h-28 bg-red-900"></div>
      <div class="w-10 h-28 bg-green-900"></div>
    </div>
  </div>
</div>

<script>
  const sidebar = document.getElementById('sidebar');
  const toggleSidebarButton = document.getElementById('toggleSidebar');

  toggleSidebarButton.addEventListener('click', () => {
    sidebar.classList.toggle('w-56');
    sidebar.classList.toggle('w-24');
  });
</script>

</body>
</html>
