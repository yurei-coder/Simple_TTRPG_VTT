# Simple_TTRPG_VTT
A simple map tool that doesn't use databases for low maintenance

The goal of this mini web page is to function similarly to the old Pyromancers site: a simple map tool to play TTRPGs with tokens, that can be shared anywhere (chats, emails, forums, etc.) without requiring accounts.

That said, this tool doesn't use databases or save files. The idea is to encode all the info into the generated link itself. It allows for low maintenance and zero wasted storage space—just drop the single PHP file onto a server, and it works. That's it. Unfortunately, this means the generated URLs are quite long (despite my attempts to compress them), but it is what it is.

Disclaimer: My coding knowledge is limited. While the project was originally written by a human (me), over time more and more of it has been rewritten by AI. The human role has been relegated to steering the AI, fixing code when the AI produces errors, and ensuring it doesn't remove features (which happens a lot).
