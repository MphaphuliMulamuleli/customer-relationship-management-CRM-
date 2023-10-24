

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
      
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
         
        </div>

       
        <h1>Last Created Policy Name: {{ $lastCreatedPolicyName }}</h1>
        <p>Total Number of Increase Cover Cases: {{ $totalNumOfIncreaseCoverCases }}</p>
        <p>Total Number of Decrease Cover Cases: {{ $totalNumOfDecreaseCoverCases }}</p>
    </body>
</html>
