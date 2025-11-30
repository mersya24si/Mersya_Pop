<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile</title>
</head>

<body>
    <h1>Edit Profile</h1>

    @if (session('success'))
        <div style="color: green;">{{ session('success') }}</div>
    @endif

    {{-- FORM 1: UPDATE PROFILE --}}
    <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <label for="profile_picture">Profile Picture:</label>
        <input type="file" name="profile_picture" id="profile_picture">
        <br><br>

        <button type="submit">Update Profile</button>
    </form> {{-- TUTUP FORM UPDATE DI SINI --}}

    <br>

    {{-- FORM 2: DELETE PROFILE (DIPISAH) --}}
    @if ($user->profile_picture)
        <div>
            <img src="{{ Storage::url($user->profile_picture) }}" alt="Profile Picture" width="200">
            <br><br>

            <form action="{{ route('profile.destroy') }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus foto?');">
                @csrf
                @method('DELETE')
                <button type="submit" style="background-color: red; color: white;">Delete Profile Picture</button>
            </form>
        </div>
    @endif

    <br>
    <a href="{{ route('profile.show') }}">Back to Profile</a>
</body>

</html>
