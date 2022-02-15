<p align="center">
    <a href="https://github.com/Vecnavium/PureChat"><img src="https://github.com/Vecnavium/PureChat/blob/stable/863.png"></img></a><br>
    <b>Provides custom chat formats based on PurePerms groups for your server.</b>
</p>

<p align="center">
    <img alt="GitHubrelease" src="https://img.shields.io/github/v/release/Vecnavium/PureChat?label=release&sort=semver">
      <img alt="Stars" src= "https://img.shields.io/github/stars/Vecnavium/PureChat?style=for-the-badge">
    <a href="https://discord.gg/6M9tGyWPjr"><img src="https://img.shields.io/discord/837701868649709568?label=discord&color=7289DA&logo=discord" alt="Discord" /></a>
</p>


# Commands

Command | Description | Permission
--- | --- | ---
`/setsuffix <player> <suffix>` | Set a players suffix. | pchat.command.setsuffix
`/setprefix <player> <prefix>` | Set a players prefix | pchat.command.setprefix
`/setnametag <group> <world> <format>` | Set the default nametag of a group | pchat.command.setnametag
`/setformat <group> <world> <format>` | Set default chat format | pchat.command.setformat

# Config

```
YAML
---

# PureChat by 64FF00 (xktiverz@gmail.com, @64ff00 for Twitter)

# PureChat version string
# - string
version: "1.4.0-BETA-04"

# Set default factions plugin for PureChat
# - FactionsPro / XeviousPE-Factions (§l§9-§8]§b>§7[§cXevious§aTestSrv§7]§b<§8[§9-) / null
default-factions-plugin: ~

# Enable this if you want to use per-world chat formats / per-world nametags for players
# - true / false
enable-multiworld-chat: false

# Please check if you have all PurePerms groups in your server here

# &0: Black, &1: Dark Blue, &2: Dark Green, &3: Dark Aqua, &4: Dark Red, &5: Dark Purple, &6: Gold, &7: Gray, &8: Dark Gray, &9: Blue
# &a: Green, &b: Aqua, &c: Red, &d: Light Purple, &e: Yellow, &f: White
# &k: Obfuscated, &l: Bold, &m: Strikethrough, &n: Underline, &o: Italic, &r: Reset

# Available PureChat tags: {display_name}, {msg}, {fac_name}, {fac_rank}, {prefix}, {suffix}, {world}
groups:
  Guest:
    chat: "&3&l{prefix}&e[Guest]&f&r {display_name} &7> {msg}"
    nametag: "&3&l{prefix}&e[Guest]&f&r {display_name}"
    worlds: []
  Admin:
    chat: "&3&l{prefix}&c[Admin]&f&r {display_name} &7> {msg}"
    nametag: "&3&l{prefix}&c[Admin]&f&r {display_name}"
    worlds: []
  Owner:
    chat: "&3&l{prefix}&a[Owner]&f&r {display_name} &7> {msg}"
    nametag: "&3&l{prefix}&a[Owner]&f&r {display_name}"
    worlds: []
  OP:
    chat: "&3&l{prefix}&9[OP]&f&r {display_name} &7> {msg}"
    nametag: "&3&l{prefix}&9[OP]&f&r {display_name}"
    worlds: []
```
# FAQ

**Why can't players have coloured chat?**

You need to set 'pchat.coloredMessages' permission for the players if you want to allow them to use colored messages

**What are the colour codes to use, and where should I put them?**

See the available colour codes listed in the Config. Do not use colour codes in PurePerms groups directly, use PureChat config instead.

# Permissions

 - pchat
 - pchat.coloredMessages
 - pchat.command
 - pchat.command.setsuffix
 - pchat.command.setprefix
 - pchat.command.setnametag
 - pchat.command.setformat
