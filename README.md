## UUID(Universally Unique Identifier) or GUID(Globally Unique Identifier)
Provides support for Universally Unique Identifiers (UUIDs). A UUID is a unique 128-bit number, stored as 16 octets. Adoption of UUIDs is widespread, with many computing platforms providing support for generating them and for parsing their textual representation. It is also known as a Globally Unique Identifier (GUID). The standard representation of a UUID is typically made of hexadecimal digits:

```
733ac5b0-d005-11ea-af2a-7986aa3603c5
```
In total, you see 32 characters with four hyphens in between. 

# Online Generate
  https://uuid-guid-generator.herokuapp.com/uuid-generator.php
  
# Versions

## Version 1 (date-time and MAC address)
Version 1 UUID is a universally unique identifier that’s generated using the MAC address of the computer and the time of generation.

## Version 2
Version 2 UUIDs are similar to version one and are not often implemented because <a href="https://tools.ietf.org/html/rfc4122" target="_blank">RFC 4122</a> does not provide much detail.

## Version 3 (namespace name-based)
In version 3, cryptographic hashing and application-provided text strings are used to generate a UUID. In this version, MD5 hashing is used. UUID’s are generated from names. We can now use a name and a namespace to create a series of UUID’s. The MD5 hashing algorithm is a widely used hash function that produces a 128-bit hash value.

## Version 4 (random)
This version uses a pseudo-random number generator to generate the UUID. It’s very simple to use. Every bit of the string is totally “randomly” generated. There’s still a chance that a UUID could be duplicated but it’s tiny because of the high number of possible combinations. The exact number of possibilities is about ²¹²⁸.

## Version 5 (namespace name-based)
The only difference between version 3 and version 5 is that a different hashing algorithm is used. Version 5 uses SHA-1 instead of MD5. 
