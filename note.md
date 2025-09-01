# Season

Season is like local storage but for server side. It is used to store user information across multiple requests.

**Some usages -**

1. Storing user login information
2. Storing flash messages
3. Storing user preferences (like theme, language etc)
4. Storing shopping cart information
5. Storing multi-step form data

### Step to work with session in laravel -

1. Store season. `session(['key' => 'value']);`, or `session()->put('key', 'value');`
2. Read season. `session('key');`, or `session()->get('key');`, or `session()->all();`
3. Delete season. `session()->forget('key');`, or `session()->flush();` (delete all)

By deafult session life time is 120 minutes. You can change it in `.ENV` file.

for checking any session is present or not - `session()->has('key');` or `session()->exists('key');` or
`session()->only(['key1', 'key2']);` or `session()->except(['key']);`

we can also increment or decrement session value - `session()->increment('key');` or `session()->decrement('key');`

regenerate session id - `session()->regenerate();` for security purpose.
