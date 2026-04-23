#!/usr/bin/env bash
# Deploy MockSite1 → GitHub → Vercel auto-deploys on push
set -e
cd "$(dirname "$0")"
git add -A
git commit -m "Deploy: $(date '+%Y-%m-%d %H:%M')" || echo "Nothing new to commit"
git push origin main
echo "✓ Pushed to GitHub — Vercel deploy triggered"
