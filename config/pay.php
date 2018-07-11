<?php

return [
    'alipay' => [
        'app_id'         => '2016080600183604',
        'ali_public_key' => 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAwQ8om0Co24rb5GNzKEKPK+rorV+7TsS7vYmP6LxoJi4iasMoP39jNc6LXMWwM7ULo4NJ6SANk4ptUMGd7L0uE0ZlvuFXbVrFoZtVwS74bGz71Z8kVNcxOtwjI9J4CeWFQF270XFb/q5FrV4dcKuhgWZw8lIoMwVSP5moIA7OBFk946yYuR6psRCuyIRUJgUxuLSrBw4HIK+BbSvQfHu90QSIgEvqiyZzllVCE1jSiXpZRA0MWX43dgYOKIf/lp/lxQ40WS2bi5IUI2bgd6LgtAZ39auuzACVI0WCO5ItVdyJjPNI9SAymMYJ0P7LXe5crT8JnbRgOBsFQ7T4LKuuHQIDAQAB',
        'private_key'    => 'MIIEowIBAAKCAQEA0qGRoL92SeFoq2bLDeiSuP+EhrFdst/2HahP/476WeqzhHe7bB9gr6xKIBSRewMKYnkBi1K2KZw1rM/rguM9jnb+RjqRwQbIFld8U99+rh5hAvFbWOzI62vSjNK1xErDvuwr+rBSvPQHTHZkQIm5J9VoxIkf9IKKWC9oZ2ONYwTjZRZJRBww3qlbjq/6RIt8UDuceWsp1/kjeaAC/2oNJ5NbLkWekrrSUwfCnmQQKbUrKkDpML+pJ9yVf7diGSrdeTZ6VPAuhplmlbRpKwb/cQrIyfz6ysaESHkYi0mT2mjm/UsYkj6DI4wvye5ZivSy80kLGyGlm5epKxiATipU3wIDAQABAoIBACM2N240E8ZOFH1y9cchdkXPEYyi4hMhNbfHh3glotydS919VqvAox07JDkwtxFldLr5l7R+400ZfC+joq+C5auHYQLEj9FBHPn/Lh2nYzoggf9H8glvrDcPE2fPYeuqxAaK3N9P0sUb1oyFzkSrwXRTTOxuMBVkLVSIuF9wWRaQUOKlE27sGqqzMjBPGfGI8tC7W6XMeP1MdGPp8+AWz88eQ5hp+QltT8p5h9/FrJ4j6pjUOEqucKou14KMuU4hjp7Uvo1oeBaxnjr9BTr4XlX5nTm9GHMSm4SZX1BbNCVk3yK+RrHBgM+m3VjNl7IBUXKoXukGjHWa2PV22gCQQsECgYEA9R4kYycY/QRLV7RxlLsd10Wn3b0hDBxfufphuBO0s8AAALB/4iAIzk2wyiBsm1bS6ZE+HLN3aEQnTTi0rrdmKB6TghGEYzEE+XqhdnH866shTtW3wLUnExPRhMM3Q/aQb1OHM/I4red/WbnsxEb9yAkeRoJLJfmlnFxn36c+k/cCgYEA2/t5GAYH7p+gumaZATv4zjhS9xFW8vpftHJ6NWBKJcRWcct/mojKqXVfg7lfwQB7bYI7sVEaYKcnjNkXLEI0Mb8gRhG4fm6ukyG6PrW7Eal/+SzDKpC86qKMYYzxZpaGxFAxZnJoSOq+TWy/feigMfLRGT5UdFHcxgwZybJdPFkCgYEA0Ey+JVibXqCgmjaocvkUYdU60y+e/ti57KS/GBv+6uXV2sAi3PnWIeNZwlsNkHCXKY+ZFfDZH00TjQcMXJFUCfH57oWOWHDWxl+VCL/TbD5wPrtVvTj0rLyhx03SEDpfAYwdEGLeEcLxsUFT2HRvw+cjyE1/KRVezGKmjyRkBH8CgYB+N/zUFunINdj/+sxBlAp/MHwR/OX5xkTRgXmzVItWvh+nbU7K+T/nGUxzhRJ25/Lp83aSl+ldmassuob8QwQ1ouc+rP5BtPn/u7NkNdufF7Uw4EkfDCsJKbkIY9lCto2e6DBgCrbhV6dXP1VkRexcnGjzZfsJPstA60KEow2yCQKBgA5CpNwPbhYFWI4BDdqj+mN1vdjhP9fCHWj/4ViG/Y0pd8pWzFN8i/o6EusskX8GyI9p75a3KsGzEiA3qxteSYJZg8Z2uApnpjJ4d+yyY5EXHXLngbx5ZJ2EbR+8E1GTZyoJrCJva34XXWVfyQv3F793avamxlak9aAzbmbHGXKB',
        'log'            => [
            'file' => storage_path('logs/alipay.log'),
        ],
    ],

    'wechat' => [
        'app_id'      => '',
        'mch_id'      => '',
        'key'         => '',
        'cert_client' => '',
        'cert_key'    => '',
        'log'         => [
            'file' => storage_path('logs/wechat_pay.log'),
        ],
    ],
];