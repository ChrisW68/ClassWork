LETTERS = 'acdekilmnoprstuy'
FIRST_LETTER = LETTERS[0]


def compute_hash(string):

    h = 9
    for char in string:
        h = h * 83 + LETTERS.index(char)
    return h

def compute_string(hash):

    hash = int(hash)

    # Quick find string length:
    hash_length = len(str(hash))
    string_length = 0
    while True:
        current_string = FIRST_LETTER * (string_length + 1)
        current_hash = compute_hash(current_string)
        if len(str(current_hash)) > hash_length:
            break
        string_length += 1

    chars = []
    for i in range(string_length):
        previous_char = None
        for char in LETTERS:
            current_string = ''.join(chars) + char + FIRST_LETTER * (string_length - i - 1)
            current_hash = compute_hash(current_string)
            if current_hash == hash:
                # String found!
                return current_string
            elif current_hash > hash:
                # Add previous character to chars[]
                chars.append(previous_char or FIRST_LETTER)
                break
            else:
                # Update previous character
                previous_char = char
    # Unable to find the string
    raise ValueError('Cannot find string for hash {hash:d}'.format(hash=hash))

if __name__ == '__main__':
    for hash in (35502317995, 244575039849066):
        print(compute_string(hash))